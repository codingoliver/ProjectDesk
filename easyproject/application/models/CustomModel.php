<?php

	class CustomModel extends CI_Model
	{

		public function isUserExist($email, $type)
		{
			$query = $this->db->get_where('user', 
				array(
					'email' => $email,
					'type' => $type
				) 
			);
			
			return count($query->result_array()) > 0;
		}


		public function isStudentExist($department, $student_id, $email)
		{
		    $sql = "SELECT department, index_no, email FROM user 
                    WHERE 
                    (department = '$department')
                    AND 
                    ( index_no = '$student_id'
                      OR email = '$email'
                    )";

			$query = $this->db->query($sql);
			
			foreach($query->result() as $val) {
				return $val->u_id;	
			}
		}

        public function isSupervisorExist($department, $staff_id, $email)
        {
            $sql = "SELECT department, index_no, email FROM user 
                    WHERE 
                    (department = '$department')
                    AND 
                    ( index_no = '$staff_id'
                      OR email = '$email'
                    )";

            $query = $this->db->query($sql);

            foreach($query->result() as $val) {
                return $val->u_id;
            }
        }


        public function isStudent($department, $index_no)
        {
            $query = $this->db->get_where('user',
                array(
                    'department' => $department,
                    'index_no' => $index_no
                )
            );

            foreach($query->result() as $val) {
                return $val->u_id;
            }
        }

        public function isStudentInAGroup($user_id)
		{
			$query = $this->db->get_where('ongoing_project_member', 
				array(
					'u_id' => $user_id
				) 
			);
			
			return count($query->result_array()) > 0;
		}

		public function insertOngoingProject($hod_id ,$supervisor_user_id, $title, $detail)
		{
			$data = array(
				'hod_id' => $hod_id,
				'u_id' => $supervisor_user_id,
				'title' => $title,
				'detail' => $detail,
                'department' => $this->getUserDepartment($hod_id)
			);

			return $this->db->insert('ongoing_project', $data);
		}

        public function insertSupervisor($fullname, $staff_id, $email, $password, $department)
        {
            $data = array(
                'fullname' => $fullname,
                'index_no' => $staff_id,
                'email' => $email,
                'password' => $password,
                'type' => 'supervisor',
                'department' => $department
            );

            return $this->db->insert('user', $data);
        }

        public function insertStudent($fullname, $staff_id, $email, $password, $department)
        {
            $data = array(
                'fullname' => $fullname,
                'index_no' => $staff_id,
                'email' => $email,
                'password' => $password,
                'type' => 'student',
                'department' => $department
            );

            return $this->db->insert('user', $data);
        }


		public function getLatestInsertedOngoingProject() 
		{
			$query = $this->db->query('SELECT o_p_id FROM ongoing_project ORDER BY o_p_id DESC LIMIT 1');

			foreach($query->result() as $val) {
				return $val->o_p_id;	
			}
		}


		public function insertOngoingProjectMembers($student_user_id_array) 
		{
			$ongoing_project_id = $this->getLatestInsertedOngoingProject();

			foreach ($student_user_id_array as $val) {
				$this->insertMember($ongoing_project_id, $val);
			}

			return true;
		}

		public function insertMember($ongoing_project_id, $student_user_id)
		{
			$data = array(
				'o_p_id' => $ongoing_project_id,
				'u_id' => $student_user_id
			);

			$this->db->insert('ongoing_project_member', $data);
		}
		

		public function isUserAndPasswordExist($email, $password, $type)
		{
			$query = $this->db->get_where('user', 
				array(
					'email' => $email, 
					'password' => $password,
					'type' => $type
				)
			 );
			
			foreach($query->result() as $val) {
				return $val->u_id;	
			}
		}

		// add new project idea
		public function insertProjectIdea($u_id, $title, $detail, $department)
		{
			$data = array(
				'u_id' => $u_id,
				'title' => $title,
				'detail' => $detail,
				'department' => $department
			);

			return $this->db->insert('project_idea', $data);
		}


		// add new supervisor project idea
		public function insertSupervisorProjectIdea($u_id, $title, $detail, $department)
		{
			$data = array(
				'u_id' => $u_id,
				'title' => $title,
				'detail' => $detail,
				'department' => $department,
				'visibility' => 'approved',
				'adder_type' => 'supervisor'
			);

			return $this->db->insert('project_idea', $data);
		}

		// get user project ideas
		public function getUserProjectIdeas($u_id)
		{
			$this->db->select('p_i_id, title, detail, department');
            $this->db->order_by('p_i_id', 'DESC');
			$query = $this->db->get_where('project_idea', array('u_id' => $u_id) );

			
			return $query->result();
		}

		public function getProjectDocDetails($user_id)
		{
			$query = "
			    SELECT *,
                (SELECT url FROM reviewed_ongoing_project_document WHERE reviewed_ongoing_project_document.o_p_d_id = ongoing_project_document.o_p_d_id ORDER BY reviewed_ongoing_project_document.r_o_p_d_id DESC LIMIT 1)
                AS reviewed_doc_url,
                (SELECT message FROM reviewed_ongoing_project_document WHERE reviewed_ongoing_project_document.o_p_d_id = ongoing_project_document.o_p_d_id ORDER BY reviewed_ongoing_project_document.r_o_p_d_id DESC LIMIT 1)
                AS reviewed_message,
                (SELECT r_o_p_d_id FROM reviewed_ongoing_project_document WHERE reviewed_ongoing_project_document.o_p_d_id = ongoing_project_document.o_p_d_id ORDER BY reviewed_ongoing_project_document.r_o_p_d_id DESC LIMIT 1)
                AS r_o_p_d_id
                FROM ongoing_project_document
                WHERE user_id = $user_id
                AND is_removed = 'no'
			";
			
			return $this->db->query($query)->result();
		}

        public function getOngoingProjectDocuments($project_id)
        {
            $this->db->select('o_p_d_id, url, datetime, title, size, file_type');
            $this->db->order_by('o_p_d_id', 'DESC');
            $query = $this->db->get_where(
                'ongoing_project_document',
                array(
                    'o_p_id' => $project_id,
                    'is_removed' => 'no',
                    'is_approved_coordinator' => 'yes'
                )
            );

            return $query->result();
        }


        public function getFinishedProjectDocument($project_id)
        {
            $this->db->select('o_p_d_id, url, datetime, title, size, file_type');
            $this->db->order_by('o_p_d_id', 'DESC');
            $query = $this->db->get_where(
                'ongoing_project_document',
                array(
                    'o_p_id' => $project_id,
                    'is_removed' => 'no',
                    'is_approved_coordinator' => 'yes',
                    'title' => 'Complete Project Document'
                )
            );

            return $query->result();
        }


		// get user project ideas
		public function getProjectDocDetailsForGroup($ongoing_project_id)
		{
			$query = "
			           SELECT *,
                       (SELECT url FROM reviewed_ongoing_project_document WHERE reviewed_ongoing_project_document.o_p_d_id = ongoing_project_document.o_p_d_id ORDER BY reviewed_ongoing_project_document.o_p_d_id DESC LIMIT 1)
                       AS reviewed_doc_url,
                       (SELECT message FROM reviewed_ongoing_project_document WHERE reviewed_ongoing_project_document.o_p_d_id = ongoing_project_document.o_p_d_id ORDER BY reviewed_ongoing_project_document.o_p_d_id DESC LIMIT 1)
                       AS reviewed_message
                       FROM ongoing_project_document
                       WHERE o_p_id = $ongoing_project_id
                       AND is_removed = 'no'     	
			";
			
			return $this->db->query($query)->result();
		}

        public function getProjectDocDetailsForGroupCoordinator($ongoing_project_id)
        {
            $this->db->select('o_p_d_id, url, datetime, title, size, file_type, is_approved_coordinator');
            $query = $this->db->get_where(
                'ongoing_project_document',
                array(
                    'o_p_id' => $ongoing_project_id,
                    'is_removed' => 'no',
                    'is_approved' => 'yes'
                )
            );

            return $query->result();
        }


		// get user department
		public function getUserDepartment($u_id)
		{
			$this->db->select('department');
			$query = $this->db->get_where('user', array('u_id' => $u_id) );
			
			foreach($query->result() as $val) {
				return $val->department;	
			}
		}

		// get student project ideas for the specified department
		public function getStudentProjectIdeas($department)
		{
			$this->db->select('p_i_id, title, detail, department, visibility');
			$query = $this->db->get_where('
				project_idea', 
				array(
					'department' => $department,
					'adder_type' => 'student'
				)
			);
			
			return $query->result();
		}


		// get user project ideas
		public function getProjectIdeaAbstract($p_i_id)
		{
			$this->db->select('detail');
			$query = $this->db->get_where('project_idea', array('p_i_id' => $p_i_id) );
			
			foreach($query->result() as $val) {
				return $val->detail;	
			}
		}


		// update project idea
		public function updateProjectIdea($p_i_id, $department, $title, $detail)
		{
			$data = array(
				'department' => $department, 
				'title' => $title,
				'detail' => $detail
			);
			$this->db->where('p_i_id', $p_i_id);

			return $this->db->update('project_idea', $data);
		}

        public function approveProjectDocument($o_p_d_id)
        {
            $data = array(
                'is_approved' => 'yes'
            );
            $this->db->where('o_p_d_id', $o_p_d_id);

            return $this->db->update('ongoing_project_document', $data);
        }

        public function disapproveProjectDocument($o_p_d_id)
        {
            $data = array(
                'is_approved' => 'no'
            );
            $this->db->where('o_p_d_id', $o_p_d_id);

            return $this->db->update('ongoing_project_document', $data);
        }

        public function coordinatorApproveProjectDocument($o_p_d_id)
        {
            $data = array(
                'is_approved_coordinator' => 'yes'
            );
            $this->db->where('o_p_d_id', $o_p_d_id);

            return $this->db->update('ongoing_project_document', $data);
        }
        public function coordinatorDisapproveProjectDocument($o_p_d_id)
        {
            $data = array(
                'is_approved_coordinator' => 'no'
            );
            $this->db->where('o_p_d_id', $o_p_d_id);

            return $this->db->update('ongoing_project_document', $data);
        }




		public function removeProjectIdea($p_i_id)
		{
			$this->db->where('p_i_id', $p_i_id);
			return $this->db->delete('project_idea');
		}

        public function removeSupervisor($u_id)
        {
            $this->db->where('u_id', $u_id);
            return $this->db->delete('user');
        }


		public function removeProjectDoc($project_doc_id)
		{
			$data = array(
				'is_removed' => 'yes', 
			);
			$this->db->where('o_p_d_id', $project_doc_id);
			return $this->db->update('ongoing_project_document', $data);
		}

		public function updateProjectVisibility($p_i_id, $status)
		{
			$data = array(
				'visibility' => $status
			);
			$this->db->where('p_i_id', $p_i_id);

			return $this->db->update('project_idea', $data);
		}


		public function getUserDetails($user_id)
		{
			$this->db->select('email, type, image, department, fullname');
			$query = $this->db->get_where('user', array('u_id' => $user_id) );
			
			return $query->result();
		}

		public function getSupervisors($department)
		{
			$this->db->select('u_id, fullname, index_no, image');
			$query = $this->db->get_where(
				'user', array(
					'department' => $department,
					'type' => 'supervisor'
				) 
			);
			
			return $query->result();
		}

        public function getStudents($department)
        {
            $this->db->select('u_id, fullname, index_no, image');
            $query = $this->db->get_where(
                'user', array(
                    'department' => $department,
                    'type' => 'student'
                )
            );

            return $query->result();
        }

		public function getProjectDocURL($project_doc_id)
		{
			$this->db->select('url');
			$query = $this->db->get_where('ongoing_project_document', array('o_p_d_id' => $project_doc_id) );
			
			foreach ($query->result() as $val) {
				return $val->url;
			}
		}

        public function getReviewedProjectDocURL($project_doc_id)
        {
            $this->db->select('url');
            $query = $this->db->get_where('reviewed_ongoing_project_document', array('r_o_p_d_id' => $project_doc_id) );

            foreach ($query->result() as $val) {
                return $val->url;
            }
        }

		// update user detail
		public function updateUserDetail($user_id, $password, $image)
		{
			$data = array(
				'password' => $password,
				'image' => $image
			);
			$this->db->where('u_id', $user_id);

			return $this->db->update('user', $data);
		}

		// insert project doc detail
		public function insertDocDetail($user_id, $o_p_id, $url, $title, $size, $file_type)
		{
			$data = array(
				'user_id' => $user_id,
				'o_p_id' => $o_p_id,
				'url' => $url,
				'title' => $title,
				'size' => $size,
				'file_type' => $file_type
			);

			return $this->db->insert('ongoing_project_document', $data);
		}

        // insert reviewed project doc detail
        public function insertReviewedDocDetail($o_p_d_id, $url, $message)
        {
            $data = array(
                'o_p_d_id' => $o_p_d_id,
                'url' => $url,
                'message' => $message
            );

            return $this->db->insert('reviewed_ongoing_project_document', $data);
        }

		// update user password
		public function updateUserPassword($user_id, $password)
		{
			$data = array(
				'password' => $password
			);
			$this->db->where('u_id', $user_id);

			return $this->db->update('user', $data);
		}

		// update user image
        public function updateUserImage($user_id, $image)
        {
            $data = array(
                'image' => $image
            );
            $this->db->where('u_id', $user_id);

            return $this->db->update('user', $data);
        }

        // get ongoing project ideas
//        public function getOngoingProjects($department)
//        {
//            $res = array();
//
//            $query = " SELECT project_idea.p_i_id,
//						project_idea.u_id,
//					   (SELECT image FROM user WHERE user.u_id = project_idea.u_id) AS image,
//					   (SELECT fullname FROM user WHERE user.u_id = project_idea.u_id) AS fullname,
//					   title,
//					   detail,
//					   department,
//					   datetime
//					   FROM project_idea
//					   WHERE department = '$department' AND is_approved_coordinator='yes' AND is_removed = 'no'";
//
//            if($department == 'all') {
//
//                $query = " SELECT project_idea.p_i_id,
//							project_idea.u_id,
//					   	   (SELECT image FROM user WHERE user.u_id = project_idea.u_id) AS image,
//					       (SELECT fullname FROM user WHERE user.u_id = project_idea.u_id) AS fullname,
//					       title,
//					   	   detail,
//					   	   department,
//					   	   datetime
//					   	   FROM project_idea
//					   	   WHERE is_approved_coordinator='yes' AND is_removed = 'no'";
//            }
//
//            $query = $this->db->query($query);
//
//            $res['num_rows'] = $query->num_rows();
//            $res['data'] = $query->result();
//
//            return $res;
//        }


        // get project ideas
		public function getProjectIdeas($department)
		{
			$res = array();

			$query = " SELECT project_idea.p_i_id, 
						project_idea.u_id,
					   (SELECT image FROM user WHERE user.u_id = project_idea.u_id) AS image,
					   (SELECT fullname FROM user WHERE user.u_id = project_idea.u_id) AS fullname,
					   title, 
					   detail,
					   department, 
					   datetime
					   FROM project_idea 
					   WHERE department = '$department' AND visibility='approved'";

			if($department == 'all') {

				$query = " SELECT project_idea.p_i_id, 
							project_idea.u_id,
					   	   (SELECT image FROM user WHERE user.u_id = project_idea.u_id) AS image,
					       (SELECT fullname FROM user WHERE user.u_id = project_idea.u_id) AS fullname,
					       title, 
					   	   detail,
					   	   department, 
					   	   datetime
					   	   FROM project_idea 
					   	   WHERE visibility='approved'";
			}

			$query = $this->db->query($query);

			$res['num_rows'] = $query->num_rows();
			$res['data'] = $query->result();
			
			return $res;
		}


		public function getProjectIdeaItem($project_id)
		{
			$query = " SELECT title, 
					   detail,
					   project_idea.department, 
					   project_idea.datetime,
                       fullname
					   FROM project_idea, user 
					   WHERE project_idea.p_i_id = $project_id 
					   AND project_idea.u_id = user.u_id ";
			$query = $this->db->query($query);

			return $query->result();
		}

        public function getOngoingProjectItem($project_id)
        {
            $query = " SELECT o_p_id, 
					   u_id,
					   (SELECT fullname FROM user WHERE ongoing_project.u_id = user.u_id ) AS supervisor_fullname, 
					   title,
                       detail,
                       datetime,
                       department
					   FROM ongoing_project 
					   WHERE o_p_id = $project_id ";
            $query = $this->db->query($query);

            return $query->result();
        }

		public function getOngoingProject($hod_id)
		{
			$query = " SELECT o_p_id, 
					   u_id,
					   (SELECT fullname FROM user WHERE ongoing_project.u_id = user.u_id ) AS supervisor_fullname, 
					   title,
                       detail,
                       datetime
					   FROM ongoing_project 
					   WHERE hod_id = $hod_id "; 
			$query = $this->db->query($query);

			return $query->result();
		}

        public function getOngoingProjects($department)
        {
            $res = array();
            $query = " SELECT o_p_id, 
					   u_id,
					   (SELECT fullname FROM user WHERE ongoing_project.u_id = user.u_id ) AS supervisor_fullname, 
					   title,
                       detail,
                       datetime
					   FROM ongoing_project 
					   WHERE department = '$department'
					   ";

            if($department == 'all') {
                $query = " SELECT o_p_id, 
					   u_id,
					   (SELECT fullname FROM user WHERE ongoing_project.u_id = user.u_id ) AS supervisor_fullname, 
					   title,
                       detail,
                       datetime
					   FROM ongoing_project 
					   ";
            }
            $query = $this->db->query($query);

            $res['data'] = $query->result();
            $res['num_rows'] = $query->num_rows();

            return $res;
        }

    public function getFinishedProjects($department)
    {
        $res = array();
        $query = " SELECT o_p_d_id, ongoing_project_document.o_p_id, department,
                    ongoing_project.title as title,
                    ongoing_project.detail as detail
                    FROM `ongoing_project_document`, `ongoing_project`
                    WHERE is_approved_coordinator = 'yes' 
                    AND ongoing_project.department='$department' 
                    AND ongoing_project_document.o_p_id = ongoing_project.o_p_id
                    AND ongoing_project_document.title = 'Complete Project Document'
				 ";

        if($department == 'all') {
            $query = " SELECT o_p_d_id, ongoing_project_document.o_p_id, department,
                        ongoing_project.title as title,
                        ongoing_project.detail as detail
                        FROM `ongoing_project_document`, `ongoing_project`
                        WHERE is_approved_coordinator = 'yes' 
                        AND ongoing_project_document.o_p_id = ongoing_project.o_p_id
                        AND ongoing_project_document.title = 'Complete Project Document'
					   ";
        }
        $query = $this->db->query($query);

        $res['data'] = $query->result();
        $res['num_rows'] = $query->num_rows();

        return $res;
    }

		public function getOngoingProjectMembers($ongoing_project_id)
		{
			$query = " SELECT u_id, 
					   (SELECT index_no FROM user WHERE ongoing_project_member.u_id = user.u_id ) AS index_no,
					   (SELECT fullname FROM user WHERE ongoing_project_member.u_id = user.u_id ) AS fullname,
					   (SELECT image FROM user WHERE ongoing_project_member.u_id = user.u_id ) AS image
					   FROM ongoing_project_member 
					   WHERE o_p_id = $ongoing_project_id "; 
			$query = $this->db->query($query);

			return $query->result();
		}

        public function getOngoingProjectSupervisor($ongoing_project_id)
        {
            $query = " SELECT u_id, 
					   (SELECT fullname FROM user WHERE ongoing_project.u_id = user.u_id ) AS fullname,
					   (SELECT image FROM user WHERE ongoing_project.u_id = user.u_id ) AS image
					   FROM ongoing_project 
					   WHERE o_p_id = $ongoing_project_id ";
            $query = $this->db->query($query);

            return $query->result();
        }

        public function getOngoingProjectMembersForStudent($ongoing_project_id, $u_id)
        {
            $query = " SELECT u_id, 
					   (SELECT index_no FROM user WHERE ongoing_project_member.u_id = user.u_id ) AS index_no,
					   (SELECT fullname FROM user WHERE ongoing_project_member.u_id = user.u_id ) AS fullname,
					   (SELECT image FROM user WHERE ongoing_project_member.u_id = user.u_id ) AS image
					   FROM ongoing_project_member 
					   WHERE 
					   u_id != $u_id
					   AND o_p_id = $ongoing_project_id ";
            $query = $this->db->query($query);

            return $query->result();
        }

		public function removeOngoingProject($ongoing_project_id)
		{
			 $this->db->delete('ongoing_project_member', array('o_p_id' => $ongoing_project_id));
			 $this->db->delete('ongoing_project', array('o_p_id' => $ongoing_project_id));

			 return true;
		}

		// returns the ongoing projectid and title
		public function getOngoingProjectIdAndTitle($supervisor_id)
		{
			$res = array();
			$this->db->select('o_p_id, title');
			$query = $this->db->get_where('ongoing_project', array('u_id' => $supervisor_id) );
			
			$res['num_rows'] = $query->num_rows();
			$res['data'] = $query->result();

			// corresponding members of each ongoing project
			$members = array();

			// corresponding chat groupid of each ongoing project
			$group_id = array();
			$i = 0;
			foreach ($res['data'] as $val) {

			    $members[$i] = $this->getOngoingProjectMembers($val->o_p_id);

			    $group_id[$i] = $this->getOngoingProjectGroupChatId($val->o_p_id);

				$i ++;
			}
			$res['members'] = $members;
			$res['group_id'] = $group_id;
			
			return $res;
		}

        // returns the ongoing projectid and title
        public function getAllOngoingProjectIdAndTitle()
        {
            $res = array();
            $this->db->select('o_p_id, title');
            $query = $this->db->get('ongoing_project');

            $res['num_rows'] = $query->num_rows();
            $res['data'] = $query->result();

            // corresponding members of each ongoing project
            $members = array();

            // corresponding chat groupid of each ongoing project
            $group_id = array();
            $i = 0;
            foreach ($res['data'] as $val) {

                $members[$i] = $this->getOngoingProjectMembers($val->o_p_id);

                $group_id[$i] = $this->getOngoingProjectGroupChatId($val->o_p_id);

                $i ++;
            }
            $res['members'] = $members;
            $res['group_id'] = $group_id;

            return $res;
        }

		public function getOngoingProjectGroupChatId($ongoing_project_id)
		{
			$this->db->select('g_id');
			$query = $this->db->get_where('groups', array('o_p_id' => $ongoing_project_id) );
			
			foreach ($query->result() as $val) {
				return $val->g_id;
			}
		}


		public function getOngoingProjectId($u_id)
		{
			$this->db->select('o_p_id');
			$query = $this->db->get_where('ongoing_project_member', array('u_id' => $u_id) );
			
			foreach ($query->result() as $val) {
				return $val->o_p_id;
			}
		}

		public function createChatGroup($supervisor_id, $ongoing_project_id, $message_table_name)
		{
			$data = array(
				'u_id' => $supervisor_id,
				'o_p_id' => $ongoing_project_id,
				'message_table_name' => $message_table_name,
			);

			return $this->db->insert('groups', $data);
		}

		public function createMessageTable($message_table_name)
		{

			$fields = array(
				'm_id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
       	 		),
        		'g_id' => array(
                'type' => 'INT'
       	 		),
       	 		'u_id' => array(
                'type' => 'INT'
       	 		),
        		'message' => array(
                'type' =>'TEXT'
        		),
        		'datetime' => array(
                'type' => 'datetime	',
                'default' => date("Y-m-d")
        		),
			);

			$this->load->dbforge();
			$this->dbforge->add_key('m_id', TRUE);
			$this->dbforge->add_field($fields);
			$this->dbforge->create_table($message_table_name, TRUE);
		}


		/*
		 *
		 * CHAT AREA
		 *
		 */

		// insert new message
        public function insertMessage($u_id, $group_chat_id, $message)
        {
            $data = array(
                'g_id' => $group_chat_id,
                'u_id' => $u_id,
                'message' => $message,
                'datetime' => date("Y-m-d H:i:s")
            );

            $table_name = $this->getMessageTableName($group_chat_id);
            return $this->db->insert($table_name, $data);
        }

        public function getMessageTableName($group_chat_id)
        {
            $query = $this->db->get_where('groups',
                array(
                    'g_id' => $group_chat_id
                )
            );

            foreach($query->result() as $val) {
                return $val->message_table_name;
            }
        }


        public function getAllMessages($group_chat_id)
        {
            $table_name = $this->getMessageTableName($group_chat_id);

            $query = " SELECT  $table_name.u_id, 
					   (SELECT image FROM user WHERE $table_name.u_id = user.u_id ) AS image,
					   (SELECT fullname FROM user WHERE $table_name.u_id = user.u_id ) AS fullname,
					   message,
					   datetime
					   FROM $table_name
					   WHERE $table_name.g_id = $group_chat_id 
					   ORDER BY datetime";
            $query = $this->db->query($query);

            return $query->result();
        }

        public function getMessagesAsynch($group_chat_id, $chat_limit, $u_id)
        {
            $table_name = $this->getMessageTableName($group_chat_id);

            $query = " SELECT  $table_name.u_id, 
					   (SELECT image FROM user WHERE $table_name.u_id = user.u_id ) AS image,
					   (SELECT fullname FROM user WHERE $table_name.u_id = user.u_id ) AS fullname,
					   message,
					   datetime
					   FROM $table_name
					   WHERE $table_name.g_id = $group_chat_id 
					   AND $table_name.u_id != $u_id 
					   AND $table_name.m_id > $chat_limit  
					   ORDER BY datetime";
            $query = $this->db->query($query);

            return $query->result();
        }

        public function getFirstMsgId($g_id)
        {
            $table_name = $this->getMessageTableName($g_id);

            $query = $this->db->get_where($table_name,
                array(
                    'g_id' => $g_id,
                )
            );

            foreach($query->result() as $val) {
                return $val->m_id; 
            }
        }

    }

?>
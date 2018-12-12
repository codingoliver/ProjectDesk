<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	// sign out user
	public function sign_out()
	{
		$this->load->view('index');
	}

	// project ideas view
	public function project_ideas()
	{
		$res = $this->CustomModel->getUserProjectIdeas($_SESSION['u_id']);
        $res2 = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;
        $data['data2'] = $res2;

		$this->load->view('project_ideas', $data);
	}

	// projects group view
	public function project_group()
	{
		$_SESSION['user_ids'] = array(); 

		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$res2 = $this->CustomModel->getSupervisors($res[0]->department);
		$res3 = $this->CustomModel->getOngoingProject($_SESSION['u_id']);
		$data['data'] = $res;
		$data['data2'] = $res2;
		$data['data3'] = $res3;

		$this->load->view('project_group', $data);
	}

    // projects group view
    public function supervisors()
    {
        $_SESSION['user_ids'] = array();

        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getSupervisors($res[0]->department);
        $res3 = $this->CustomModel->getOngoingProject($_SESSION['u_id']);
        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['data3'] = $res3;

        $this->load->view('supervisors', $data);
    }

    public function students()
    {
        $_SESSION['user_ids'] = array();

        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getStudents($res[0]->department);
        $res3 = $this->CustomModel->getOngoingProject($_SESSION['u_id']);
        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['data3'] = $res3;

        $this->load->view('students', $data);
    }

    public function ongoing_project($department)
    {
        $_SESSION['user_ids'] = array();

        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getStudents($res[0]->department);
        $res3 = $this->CustomModel->getOngoingProject($_SESSION['u_id']);
        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['data3'] = $res3;

        switch ($department) {
            case 'ent':
                $department = "Entrepreneurship";
                break;
            case 'cs_it':
                $department = "Computer Science & IT";
                break;
            case 'e_e':
                $department = "Electrical & Comp Eng";
                break;
            case 'natu':
                $department = "Natural Resources";
                break;
            case 'math':
                $department = "Mathematical Sciences";
                break;
            case 'mech':
                $department = "Mechanical & Agric Eng";
                break;
            case 'hosp':
                $department = "Hospitality Management";
                break;
            default:
                break;
        }

        $res4 = $this->CustomModel->getOngoingProjects($department);
        $data['data4'] = $res4['data'];
        $data['num_rows'] = $res4['num_rows'];

        $this->load->view('ongoing_project', $data);
    }

    public function finished_project($department)
    {
        $_SESSION['user_ids'] = array();

        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getStudents($res[0]->department);
        $res3 = $this->CustomModel->getOngoingProject($_SESSION['u_id']);
        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['data3'] = $res3;

        switch ($department) {
            case 'ent':
                $department = "Entrepreneurship";
                break;
            case 'cs_it':
                $department = "Computer Science & IT";
                break;
            case 'e_e':
                $department = "Electrical & Comp Eng";
                break;
            case 'natu':
                $department = "Natural Resources";
                break;
            case 'math':
                $department = "Mathematical Sciences";
                break;
            case 'mech':
                $department = "Mechanical & Agric Eng";
                break;
            case 'hosp':
                $department = "Hospitality Management";
                break;
            default:
                break;
        }

        $res4 = $this->CustomModel->getFinishedProjects($department);
        $data['data4'] = $res4['data'];
        $data['num_rows'] = $res4['num_rows'];

        $this->load->view('finished_project', $data);
    }


	// project ideas view for supervisor
	public function project_ideas_sup()
	{
        $res2 = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$res = $this->CustomModel->getUserProjectIdeas($_SESSION['u_id']);
		$data['data'] = $res;
        $data['data2'] = $res2;

		$this->load->view('project_ideas_sup', $data);
	}


	// student project ideas view
	public function student_project_ideas()
	{
        $res2 = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$department = $this->CustomModel->getUserDepartment($_SESSION['u_id']);
		$res = $this->CustomModel->getStudentProjectIdeas($department);
		$data['data'] = $res;
        $data['data2'] = $res2;

		$this->load->view('student_project_ideas', $data);
	}

	// check if student has group already
	public function check_student_group($student_id)
	{
		// get user's department(hod)
		$user_department = $this->CustomModel->getUserDepartment($_SESSION['u_id']);

		// check if student index_no exists in that department
		$user_id = $this->CustomModel->isStudent($user_department, $student_id);

		if(!$user_id) {
			echo 'Student doesnot exist';
		} else {

			// check if student already has a group
			$isAlreadyGrouped = $this->CustomModel->isStudentInAGroup($user_id);

			if($isAlreadyGrouped) {
				echo 'Student already in a group';
			} else {

				// store user id in session array
				array_push($_SESSION['user_ids'], $user_id);
				echo 'success';
			}

		}
	}

    // check if staff has already been added
    public function check_staff($staff_id)
    {
        // get user's department(hod)
        $user_department = $this->CustomModel->getUserDepartment($_SESSION['u_id']);
        $email = $this->input->get('email');
        $_SESSION['department'] = $user_department;

        // check if student index_no exists in that department
        $user_id = $this->CustomModel->isSupervisorExist($user_department, $staff_id, $email);

        if(!$user_id) {
            echo 'Staff doesnot exist';
        }
    }

    public function check_student($index_no)
    {
        // get user's department(hod)
        $user_department = $this->CustomModel->getUserDepartment($_SESSION['u_id']);
        $_SESSION['department'] = $user_department;

        $email = $this->input->get('email');
        // check if student index_no exists in that department
        $user_id = $this->CustomModel->isStudentExist($user_department, $index_no, $email);

        if(!$user_id) {
            echo 'Staff doesnot exist';
        }
    }

	// create new group man                                                                                           
	public function create_group()
	{
		$supervisor_id = $this->input->post('supervisor_id'); 
		$title = $this->input->post('title');
		$detail = $this->input->post('detail');

		if($this->CustomModel->insertOngoingProject($_SESSION['u_id'], $supervisor_id, $title, $detail)) {

			if($this->CustomModel->insertOngoingProjectMembers($_SESSION['user_ids'])) {

				// empty user_id array to make room for next one
				$_SESSION['user_id'] = array();
				echo 'success';
			}
		}
	}

	// login user verification
	public function user_verification()
	{
		$email = $this->input->get('email');
		$type = $this->input->get('type');
		$password = $this->input->get('password');

		$isUserExist = $this->CustomModel->isUserExist($email, $type);
		$isUserAndPasswordExist = $this->CustomModel->isUserAndPasswordExist($email, $password, $type);

		if(!$isUserExist) {
			echo 'User doesnot exist';
		} else if(!($isUserAndPasswordExist > 0) ) {
			echo 'Invalid password';
		} else {

			// store user id in session
			$_SESSION['u_id'] = $isUserAndPasswordExist;
			echo 'success';
		}
	}



	// add new project idea
	public function insert_project_idea()
	{

		$this->CustomModel->insertProjectIdea(
			$_SESSION['u_id'],
			$this->input->post('title'),
			$this->input->post('detail'),
			$this->input->post('programme')
		);

		// reload project idea view
        header('location:'.base_url('index.php/Welcome/project_ideas'));
	}

    // add new project idea
    public function insert_supervisor()
    {
        $res = $this->CustomModel->insertSupervisor(
            $this->input->post('fullname'),
            $this->input->post('staff_id'),
            $this->input->post('email'),
            $this->input->post('password'),
            $_SESSION['department']
        );

        if($res) {
            echo 'success';
        }
    }

    public function insert_student()
    {
        $res = $this->CustomModel->insertStudent(
            $this->input->post('fullname'),
            $this->input->post('staff_id'),
            $this->input->post('email'),
            $this->input->post('password'),
            $_SESSION['department']
        );

        if($res) {
            echo 'success';
        }
    }

	// add new project idea
	public function insert_project_idea_sup()
	{

		$this->CustomModel->insertSupervisorProjectIdea(
			$_SESSION['u_id'],
			$this->input->post('title'),
			$this->input->post('detail'),
			$this->input->post('programme')
		);

		// reload project idea view
		$this->project_ideas_sup();
	}

	// update project idea details
	public function update_project_idea_sup($project_idea_id)
	{

		$this->CustomModel->updateProjectIdea(
			$project_idea_id, 
			$this->input->post('programme'),
			$this->input->post('title'),
			$this->input->post('detail')
		);

		// reload project ideas view
		$this->project_ideas_sup();
	}

    public function coordinator_approve_project_document($o_p_d_id)
    {

        $res = $this->CustomModel->coordinatorApproveProjectDocument(
            $o_p_d_id
        );

        if($res) {
            echo 'success';
        }
    }

    public function coordinator_disapprove_project_document($o_p_d_id)
    {

        $res = $this->CustomModel->coordinatorDisapproveProjectDocument(
            $o_p_d_id
        );

        if($res) {
            echo 'success';
        }
    }

    public function approve_project_document($o_p_d_id)
    {

        $res = $this->CustomModel->approveProjectDocument(
           $o_p_d_id
        );

        if($res) {
            echo 'success';
        }
    }

    public function disapprove_project_document($o_p_d_id)
    {

        $res = $this->CustomModel->disapproveProjectDocument(
            $o_p_d_id
        );

        if($res) {
            echo 'success';
        }
    }



    // update project idea details
	public function update_project_idea($project_idea_id)
	{

		$this->CustomModel->updateProjectIdea(
			$project_idea_id, 
			$this->input->post('programme'),
			$this->input->post('title'),
			$this->input->post('detail')
		);

		// reload project view
        header('location:'.base_url('index.php/Welcome/project_ideas'));
	}

	// remove project idea
	public function remove_project_idea($p_i_id)
	{
		$res = $this->CustomModel->removeProjectIdea($p_i_id);
		if($res) {
				echo 'remove successful';
		}
        // reload project idea view

	}

    // remove project idea
    public function remove_supervisor($u_id)
    {
        $res = $this->CustomModel->removeSupervisor($u_id);
        if($res) {
            echo 'remove successful';
        }

    }

	// remove project doc
	public function remove_project_doc($project_doc_id)
	{
		$res = $this->CustomModel->removeProjectDoc($project_doc_id);
		if($res) {
				echo 'remove successful';
		} 
	}

	// download project doc to desktop
	public function download_project_doc($project_id) {

		$url = $this->CustomModel->getProjectDocURL($project_id);
		force_download($url, NULL);
	}

    // download project doc to desktop
    public function download_reviewed_project_doc($project_id) {
        $url = $this->CustomModel->getReviewedProjectDocURL($project_id);
        force_download($url, NULL);
    }


	// get projectidea abstract
	public function project_abstract($p_i_id)
	{
		$res = $this->CustomModel->getProjectIdeaAbstract($p_i_id);
		echo $res;
	}


	// student home view
	public function student()
	{
		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;
	
		$this->load->view('student', $data);
	}

	// student chat room view
	public function chat_room_student()
	{
		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;
	
		$this->load->view('chat_room_student', $data);
	}


	// supervisor home view
	public function supervisor()
	{
		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;
	
		$this->load->view('supervisor', $data);
	}

    // coordinator home view
    public function coordinator()
    {
        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $data['data'] = $res;

        $this->load->view('coordinator', $data);
    }

	// hod home view
	public function hod()
	{
		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;
		$this->load->view('hod', $data);
	}

	// student profile view
	public function student_profile()
	{
		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;

		$this->load->view('student_profile', $data);
	}

	// supervisor profile view
	public function supervisor_profile()
	{
		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;

		$this->load->view('supervisor_profile', $data);
	}

    // coordinator profile view
    public function coordinator_profile()
    {
        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $data['data'] = $res;

        $this->load->view('coordinator_profile', $data);
    }

	// hod profile view
	public function hod_profile()
	{
		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;

		$this->load->view('hod_profile', $data);
	}


	// approve or disapprove project ideas
	public function visibility($status, $project_id)
	{
		$res = $this->CustomModel->updateProjectVisibility(
			$project_id, $status
		 );

		if($res) {
			echo 'success';
		}
		
	}

	// // update user detail
	// public function update_user_detail()
	// {

	// 	$res = $this->CustomModel->updateUserDetail(
	// 		$_SESSION['u_id'], 		
	// 		$this->input->post('password')
	// 	);

	// 	if($res) {
	// 		echo 'success';
	// 	}
	// }


	public function getRandomString($len)
	{
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$chars_len = strlen($chars);
		$randString = '';
		for($i = 0; $i < $chars_len; $i++) {
			$randString .= $chars[rand(0, $chars_len-1)];
		}
		
		return $randString.'.jpg';
	}

	public function getRandString($len)
	{
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$chars_len = strlen($chars);
		$randString = '';
		for($i = 0; $i < $chars_len; $i++) {
			$randString .= $chars[rand(0, $chars_len-1)];
		}
		
		return $randString;
	}

	public function getRandStr($len)
	{
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$chars_len = strlen($chars);
		$randString = '';
		for($i = 0; $i < $chars_len; $i++) {
			$randString .= $chars[rand(0, $chars_len-1)];
		}
		
		return $randString;
	}


	function load_user_view($type)
	{
		switch ($type) {
			case 'student':
				$this->student_profile();
				break;

			case 'supervisor':
				$this->supervisor_profile();
				break;

            case 'coordinator':
                $this->coordinator_profile();
                break;

			case 'hod':
				$this->hod_profile();
				break;		
		}
	}

	// update hod detail
	public function update_user_detail($type)
	{
		$str = $this->getRandomString(20);
		$config['upload_path'] = "./uploads/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 200000;
        $config['file_name'] = $str;


        $this->load->library('upload', $config);

        $password = $this->input->post('password');

        // update only image
        if($password == '') {

            // update only image
            $res = $this->CustomModel->updateUserImage(
                $_SESSION['u_id'],
                'uploads/'.$str
            );

            // load the corresponding user view
            $this->load_user_view($type);
        }

        // update image and password
  		if ($this->upload->do_upload('image')) {

			$res = $this->CustomModel->updateUserDetail(
				$_SESSION['u_id'], 		
				$this->input->post('password'),
				'uploads/'.$str
			);

			// resize image here
            $config['image_library'] = 'gd2';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 512;
            $config['height']       = 512;
            $config['source_image'] = 'uploads/'.$str;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

        } else {
			// update only password
			$res = $this->CustomModel->updateUserPassword(
			$_SESSION['u_id'], 		
			$this->input->post('password')
			);
        }



        // load the corresponding user view
		$this->load_user_view($type);
	}

	// project ideas per department or all view
	public function project_idea($department)
	{
		switch ($department) {
			case 'ent':
				$department = "Entrepreneurship";
				break;
			case 'cs_it':
				$department = "Computer Science & IT";
				break;
			case 'e_e':
				$department = "Electrical & Comp Eng";
				break;
			case 'natu':
				$department = "Natural Resources";
				break;
			case 'math':
				$department = "Mathematical Sciences";
				break;
			case 'mech':
				$department = "Mechanical & Agric Eng";
				break;
			case 'hosp':
				$department = "Hospitality Management";
				break;
			default:
				break;
		}

		$res = $this->CustomModel->getProjectIdeas($department);
		$data['data'] = $res['data'];
		$data['num_rows'] = $res['num_rows'];

		$this->load->view('project_idea', $data);
	}


	// project idea item view
	public function project_idea_item($project_id)
	{
		$res = $this->CustomModel->getProjectIdeaItem($project_id);
		$data['data'] = $res;

		$this->load->view('project_idea_item', $data);
	}

    // project idea item view
    public function ongoing_project_item($project_id)
    {
        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getOngoingProjectItem($project_id);
        $res3 = $this->CustomModel->getOngoingProjectDocuments($project_id);
        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['data3'] = $res3;

        $this->load->view('ongoing_project_item', $data);
    }

    public function finished_project_item($project_id)
    {
        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getOngoingProjectItem($project_id);
        $res3 = $this->CustomModel->getFinishedProjectDocument($project_id);
        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['data3'] = $res3;

        $this->load->view('finished_project_item', $data);
    }

	// student project docs view 
	public function proj_doc_stud()
	{
		$res = $this->CustomModel->getProjectDocDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;
        $data['data2'] = $res2;

		$this->load->view('proj_doc_stud', $data);
	}

	// supervisor project docs view 
	public function proj_doc_supervisor($ongoing_project_id)
	{

		$res = $this->CustomModel->getProjectDocDetailsForGroup($ongoing_project_id);
        $res2 = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$data['data'] = $res;
        $data['data2'] = $res2;
        $data['id'] = $ongoing_project_id;


		$this->load->view('proj_doc_supervisor', $data);
	}

    public function project_progress($ongoing_project_id)
    {

        $res = $this->CustomModel->getProjectDocDetailsForGroupCoordinator($ongoing_project_id);
        $res2 = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['id'] = $ongoing_project_id;


        $this->load->view('project_progress', $data);
    }

	// supervisor project group view 
	public function proj_group_supervisor()
	{
		$res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
		$res2 = $this->CustomModel->getOngoingProjectIdAndTitle($_SESSION['u_id']);
		$data['data'] = $res;
		$data['num_rows'] = $res2['num_rows'];
		$data['data2'] = $res2['data'];
		$data['data3'] = $res2['members'];

		$this->load->view('proj_group_supervisor', $data);
	}

    public function project_groups()
    {
        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getAllOngoingProjectIdAndTitle();
        $data['data'] = $res;
        $data['num_rows'] = $res2['num_rows'];
        $data['data2'] = $res2['data'];
        $data['data3'] = $res2['members'];

        $this->load->view('project_groups', $data);
    }

    // chat groups view
    public function chat_groups()
    {
        $res = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res2 = $this->CustomModel->getOngoingProjectIdAndTitle($_SESSION['u_id']);
        $data['data'] = $res;
        $data['num_rows'] = $res2['num_rows'];
        $data['data2'] = $res2['data'];
        $data['data3'] = $res2['members'];
        $data['data4'] = $res2['group_id'];

        $this->load->view('chat_groups', $data);
    }


    // chat room view
    public function chat_room($ongoing_project_id)
    {
        $res = $this->CustomModel->getOngoingProjectGroupChatId($ongoing_project_id);
        $res2 = $this->CustomModel->getUserDetails($_SESSION['u_id']);
        $res3 = $this->CustomModel->getOngoingProjectMembers($ongoing_project_id);
        $res4 = $this->CustomModel->getAllMessages($res);
        $res5 = $this->CustomModel->getFirstMsgId($res);

        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['data3'] = $res3;
        $data['data4'] = $res4;
        $data['chat_start'] = $res5;

        $this->load->view('chatroom', $data);
    }

    // student chatroom view
    public function chatroom_student()
    {
    	$ongoing_project_id = $this->CustomModel->getOngoingProjectId($_SESSION['u_id']);
        $res = $this->CustomModel->getOngoingProjectGroupChatId($ongoing_project_id);
        $res2 = $this->CustomModel->getUserDetails($_SESSION['u_id']);

        $res3 = $this->CustomModel->getOngoingProjectMembersForStudent($ongoing_project_id, $_SESSION['u_id']);
        $res4 = $this->CustomModel->getAllMessages($res);
        $res5 = $this->CustomModel->getOngoingProjectSupervisor($ongoing_project_id);
        $res6 = $this->CustomModel->getFirstMsgId($res);


        $data['data'] = $res;
        $data['data2'] = $res2;
        $data['data3'] = $res3;
        $data['data4'] = $res4;
        $data['data5'] = $res5;
        $data['chat_start'] = $res6;

        $this->load->view('chatroom_student', $data);
    }

    // upload project doc
    public function upload_proj_doc()
    {
        $config['upload_path'] = "./proj_docs/";
        $config['allowed_types'] = 'doc|docx|pdf|zip|rar|txt|rtf';
        $config['max_size'] = 5000000;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        // update image and password
        if ($this->upload->do_upload('user_file')) {

            $res = $this->CustomModel->insertDocDetail(
                $_SESSION['u_id'],
                $this->CustomModel->getOngoingProjectId($_SESSION['u_id']),
                'proj_docs/'.$this->upload->data('file_name'),
                $this->input->post('title'),
                $this->upload->data('file_size'),
                $this->upload->data('file_ext')
            );
            // reload student project docs view
            header('location:'.base_url('index.php/Welcome/proj_doc_stud'));
        } else {

            //$error = array('error' => $this->upload->display_errors());
            //$this->load->view('error', $error);

            echo "<script> alert('Invalid file!')</script>";
            $this->proj_doc_stud();
        }
    }

	// upload project doc
	public function upload_reviewed_doc($ongoing_project_id, $o_p_d_id)
	{
		$config['upload_path'] = "./proj_docs/";
        $config['allowed_types'] = 'doc|docx|pdf|zip|rar|txt|rtf';
        $config['max_size'] = 5000000;
        $config['encrypt_name'] = true;
        
        $this->load->library('upload', $config);

  		if ($this->upload->do_upload('user_file')) {

			$res = $this->CustomModel->insertReviewedDocDetail(
                $o_p_d_id,
				'proj_docs/'.$this->upload->data('file_name'),
				$this->input->post('message')
			);
            // reload student project docs view
            header('location:'.base_url('index.php/Welcome/proj_doc_supervisor/'.$ongoing_project_id));
        } else {
            echo "<script> alert('Invalid file!')</script>";
            $this->proj_doc_supervisor($ongoing_project_id);
        }
	}

	// load project members for the specified ongoing project
	public function load_project_members($ongoing_project_id)
	{
		$res = $this->CustomModel->getOngoingProjectMembers($ongoing_project_id);
		
		echo json_encode($res);
	}

	public function remove_ongoing_project($ongoing_project_id) 
	{
		if($this->CustomModel->removeOngoingProject($ongoing_project_id)) {
			echo 'success';
		}
	}

	// creates a chat group
	public function create_chat_group($ongoing_project_id) 
	{
		// insert into groups table to record new chat_group created
		$message_table_name = $this->getRandStr(20).$ongoing_project_id;
		$this->CustomModel->createChatGroup($_SESSION['u_id'], $ongoing_project_id, $message_table_name);

		// create a corresponding message table for the new chat_group created
		$this->CustomModel->createMessageTable($message_table_name);

		// back to chat room view
		header('location:'.base_url('index.php/Welcome/chat_room/'.$ongoing_project_id));
	}

	/**
     *
     * CHAT AREA
     *
     */
    // add new project idea
    public function insert_message()
    {
       $res =  $this->CustomModel->insertMessage(
            $_SESSION['u_id'],
            $this->input->post('group_chat_id'),
            $this->input->post('message')
        );
       if ($res) {

       } else {

       }
    }

    public function get_message_asynch($chat_limit)
    {
        $res =  $this->CustomModel->getMessagesAsynch(
            $this->input->post('group_chat_id'),
            $chat_limit,
            $_SESSION['u_id']
        );
        echo json_encode($res);
    }




}

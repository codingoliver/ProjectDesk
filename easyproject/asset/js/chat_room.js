
$(function () {

    // current chat limit counter
    cur_chat_limit = $('#chat-limit').data('name');

    // check for messages in the background
    setInterval(function () {

        group_chat_id = $('#group-chat').data('name');

        $.post('http://localhost/easyproject/index.php/Welcome/get_message_asynch/'+cur_chat_limit, {
                group_chat_id : group_chat_id
            },
            function(data, status) {

                if(status === 'success') {

                    var msgs = jQuery.parseJSON(data);
                    var image, message;
                    $.each(msgs, function (key, value) {

                        image = 'http://localhost/easyproject/' + value.image;
                        message = value.message;
                        $('<li class="replies"><img src=' + image + ' alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
                        $('.message-input input').val(null);
                        $('.contact.active .preview').html('<span></span>' + message);
                        $(".messages").animate({ scrollTop: $(document).height() }, "fast");

                        cur_chat_limit += 1;
                    });

                } else {
                    alert('failure');
                }
            }
        );

    }, 4000);

    $(".messages").animate({ scrollTop: $(document).height() }, "fast");

    $("#profile-img").click(function() {
       $("#status-options").toggleClass("active");
    });


    $("#status-options ul li").click(function() {
        $("#profile-img").removeClass();
        $("#status-online").removeClass("active");
        $("#status-away").removeClass("active");
        $("#status-busy").removeClass("active");
        $("#status-offline").removeClass("active");
        $(this).addClass("active");

        if($("#status-online").hasClass("active")) {
            $("#profile-img").addClass("online");
        } else if ($("#status-away").hasClass("active")) {
            $("#profile-img").addClass("away");
        } else if ($("#status-busy").hasClass("active")) {
            $("#profile-img").addClass("busy");
        } else if ($("#status-offline").hasClass("active")) {
            $("#profile-img").addClass("offline");
        } else {
            $("#profile-img").removeClass();
        };

        $("#status-options").removeClass("active");
    });

    function newMessage(group_chat_id) {

        cur_chat_limit += 1;

        image_url = $('#profile-img').attr('src');
        message = $(".message-input input").val();
        if($.trim(message) == '') {
            return false;
        }
        $('<li class="sent"><img src=' + image_url + ' alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
        $('.message-input input').val(null);
        $('.contact.active .preview').html('<span>You: </span>' + message);
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");

        // ajax call to verify category
        $.post('http://localhost/easyproject/index.php/Welcome/insert_message', {
                group_chat_id: group_chat_id,
                message: $.trim(message)
            },
            function(data, status) {

                if(status === 'success') {

                } else {
                    alert('failure');
                }
            }
        );

    };


    $('.submit').click(function() {
        group_chat_id = $('#group-chat').data('name');
        newMessage(group_chat_id);
    });

    $(window).on('keydown', function(e) {
        if (e.which == 13) {

            group_chat_id = $('#group-chat').data('name');
            newMessage(group_chat_id);
            return false;
        }
    });
//# sourceURL=pen.js

});


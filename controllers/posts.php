<?php namespace App;

class posts extends Controller
{

    /**
     * This is a normal action which will be called when user visits /posts/index URL. Since index is the default
     * action name, it may be omitted (URL can be /posts). Since posts is by default the default controller, it may
     * be omitted (URL can be /). After calling the action, a view from views/controller-name/controller-name_action-name.php
     * is loaded (it must exist, unless the function ends with stop() call.
     */
    function index()
    {
        $this->posts = get_all("SELECT * FROM post");
        $_tags = get_all('SELECT * FROM post_tags NATURAL JOIN tag');
        foreach ($_tags as $tag){
            $this->postTags = get_all('SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='.$tag['post_id']);
            $this->tags[$tag['post_id']] = $this->postTags;
        }
    }

    function view(){
        $post_id = $this->params[0]; // get the post id from url for example http://localhost/blog/posts/2 - post_id is 2
        $this->post = get_first('SELECT * FROM post NATURAL JOIN users WHERE post_id='.$post_id);
        $this->tags = get_all('SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='.$post_id);
    }
    /**
     * This function will only be ran in case of an AJAX request. No view will be attempted to load after this function.
     */
    function AJAX_success()
    {


        stop(201,'Everything is awesome');
    }

    /**
     * This function will only be ran in case of an AJAX request. No view will be attempted to load after this function.
     */
    function AJAX_error()
    {

        // Test sending emails
        Mail::send(DEVELOPER_EMAIL, 'test', 'test');

        echo "This text comes from the server and will be shown only in development environment for debugging purposes. ";
        echo "Here is a nice exception for you to debug:";

        // Generate error for testing
        throw new \Exception('This is a test');


    }
}
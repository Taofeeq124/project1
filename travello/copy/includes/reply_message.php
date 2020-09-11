
<?php 


        if(isset($_GET['reply_message'])){

        $reply_message_id = $_GET['reply_message'];

        $query = "SELECT * FROM contact WHERE id = $reply_message_id";
        $select_users_query = mysqli_query($connection , $query);
        while($loop = mysqli_fetch_assoc($select_users_query)){

        //$message_id             = $loop['id'];
        $message_author         = $loop['name'];
        $sender_email           = $loop['email'];
        $message_subject        = $loop['subject'];
        $message_content        = $loop['message'];
        // $message_date           = $loop['m_date'];
        // $message_time           = $loop['m_time'];


        }

        }



// if(isset($_POST['submit'])){

//     $to = "mashoodtaofeek@gmail.com";
//     $subject = wordwrap($_POST['subject'], 70);
//     $body    = $_POST['body'];
//     $header  = "From " .$_POST['email'];

//     mail( $to , $subject , $body , $header );

//     $mssg="Message sent";


// }else{

//     $mssg= " ";
// }
    


?>



<form action="" method="post" enctype="multipart/form-data">


<div class='text-center ' style="margin-bottom:15px;"> 

<h4 class='btn btn-default' ><a href='message.php' > View All Messages  </a></h4>  


</div>

<h2 class="text-center">A reply to
<button class="btn btn-success btn-md "><?php echo $message_author; ?></button> Message</h2>

<div class="row mt-5 mb-5">

<div class="form-group">
<label for="firstname">Sender to:</label>
<input type="text" value=" <?php echo $sender_email; ?> " class="form-control " name="name" required>
</div>

<div class="form-group">
<label for="lastname">Sender Email:</label>
<input type="text"  value="your email" class="form-control" name="email" required>
</div>





<div class="form-group">
<label for="username">Subject:</label>
<input type="text"  value="your subject"  class="form-control" name="subject" required >
</div>




<div class="form-group " id="editor">
<label for="post_content">message Content</label>
<textarea  class="form-control"  name="message"  cols="5" rows="10"> type your message </textarea >
</div> 



 
<!-- <div class="form-group">
<label for="password">Password</label>
<input type="password" autocomplete="off"   class="form-control" name="user_password" required >
</div> -->

</form>
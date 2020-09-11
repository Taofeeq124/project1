
<?php 


    if(isset($_GET['view_message'])){

        $view_message_id = $_GET['view_message'];

    $query = " SELECT * FROM contact WHERE id =  $view_message_id ";
    $select_users_query = mysqli_query($connection , $query);
    while($loop = mysqli_fetch_assoc($select_users_query )) {
    
        $message_id             = $loop['id'];
        $message_author         = $loop['name'];
        $sender_email           = $loop['email'];
        $message_subject        = $loop['subject'];
        $message_content        = $loop['message'];
        $message_date           = $loop['m_date'];
        $message_time           = $loop['m_time'];


    }

}
?>



<form action="" method="" enctype="multipart/form-data">

    
<div class='text-center ' style="margin-bottom:15px;"> 

<h4 class='btn btn-default' ><a href='message.php' > View All Messages  </a></h4>  
<h4 class='btn btn-default'>
<a href="message.php?source=reply_message&reply_message=<?php $message_id?>">Reply this message</a> </h4> 

</div>

<div class="row mt-5 mb-5">

<div class="col-lg-6 text-center "><h4 class="btn btn-default">Date Recieved: </h4>  <h4 class="btn btn-primary"> <?Php echo$message_date;?></h4> </div>
<div class="col-lg-6 text-center"><h4 class="btn btn-default">Time Recieved:</h4> <h4 class="btn btn-primary"> <?Php echo  $message_time;?></h4></div>
</div>


<div class="form-group">
<label for="firstname">Sender:</label>
<input type="text" value=" <?Php echo $message_author;?>" class="form-control" name="name" required>
</div>

<div class="form-group">
<label for="lastname">Sender Email:</label>
<input type="text"  value=" <?Php echo $sender_email; ?>" class="form-control" name="email" required>
</div>





<div class="form-group">
<label for="username">Sender Subject:</label>
<input type="text"  value=" <?Php echo $message_subject; ?>"  class="form-control" name="subject" required >
</div>




<div class="form-group " id="editor">
<label for="post_content">message Content</label>
<textarea  class="form-control"  name="message"  cols="5" rows="10"> <?php echo $message_content; ?> </textarea >
</div> 



     
<!-- <div class="form-group">
<label for="password">Password</label>
<input type="password" autocomplete="off"   class="form-control" name="user_password" required >
</div> -->

</form>
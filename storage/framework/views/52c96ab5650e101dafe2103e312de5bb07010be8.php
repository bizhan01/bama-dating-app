<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Conversation <?php echo e($conversation->id); ?></h1>

<ul>
    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($message->user->name); ?>: <?php echo e($message->content); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<form action="<?php echo e(route('messages.store', $conversation)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="content" placeholder="Type your message">
    <button type="submit">Send</button>
</form>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/conversations/show.blade.php ENDPATH**/ ?>
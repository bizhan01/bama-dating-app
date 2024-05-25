<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Conversations</h1>
    <ul>
      <?php if(!empty($conversations)): ?>
          <?php $__currentLoopData = $conversations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                  <a href="<?php echo e(route('conversations.show', $conversation)); ?>"><?php echo e($conversation->id); ?></a>
              </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
          <p>No conversations found.</p>
      <?php endif; ?>

      <form action="<?php echo e(route('startConversation')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

          <input type="number" name="user2_id" value="">
          <button type="submit">Send</button>
      </form>
    </ul>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/conversations/index.blade.php ENDPATH**/ ?>
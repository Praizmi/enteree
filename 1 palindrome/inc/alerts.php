<div class="mt-3">
    <?php if($smsg): ?>
    <div class="alert msg-alert border-success text-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle"></i>
        <?= $smsg ?>
    </div>
    <?php endif ?>
    <?php if($imsg): ?>
    <div class="alert msg-alert border-info text-info alert-dismissible fade show" role="alert">
        <i class="bi bi-info-circle"></i>
        <?= $imsg ?>
    </div>
    <?php endif ?>
    <?php if($emsg): ?>
    <div class="alert msg-alert border-danger text-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-circle"></i>
        <?= $emsg ?>
    </div>
    <?php endif ?>
</div>
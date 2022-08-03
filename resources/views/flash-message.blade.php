@if ($message = Session::get('success'))
    <?php myMessage($message, 'success'); ?>
@endif

@if ($message = Session::get('error'))
    <?php myMessage($message, 'danger'); ?>
@endif

@if ($message = Session::get('edited'))
    <?php myMessage($message, 'info'); ?>
@endif

@if ($message = Session::get('delete'))
    <?php myMessage($message, 'danger'); ?>
@endif

@if ($message = Session::get('warning'))
    <?php myMessage($message, 'warning'); ?>
@endif

@if ($message = Session::get('info'))
    <?php myMessage($message, 'info'); ?>
@endif

@if ($message = Session::get('roleAssigned'))
    <?php myMessage($message, 'info'); ?>
@endif

@if ($message = Session::get('roleRemoved'))
    <?php myMessage($message, 'info'); ?>
@endif

<script>
    $(function() {
        setTimeout(() => {
            $('.alert').trigger('click');
        }, 1500);
    })
</script>

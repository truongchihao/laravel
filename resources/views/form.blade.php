<form action="/1" method="post">
    <div>
        <input type="text" name="username" id="" placeholder="Nhập username...">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="_method" value="POST">
    </div>
    <button type="submit">Submit</button>

</form>
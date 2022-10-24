<nav class="navbar navbar-dark bg-primary ">
    <a class="navbar-brand" href="<?=base_url('admin/dashboard') ?>">Articles</a>



    <span class="navbar-text">
        <?= anchor('login/logout','LOGOUT',['class'=>'someclass']) ?>
    </span>





    <?= form_open('admin/search',['class'=>'search-form','autocomplete'=>'off']) ?>
        <input type="text" name="query" placeholder="Search" id="search" required>
        <input type="submit" name="" value="Search" id="search-btn">
    <?= form_close();  ?>
    <?= form_error('query',"<p class='navbar-text text-danger'>","</p>"); ?>
</nav>
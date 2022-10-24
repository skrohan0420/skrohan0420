<nav class="navbar navbar-dark bg-primary ">
    <a class="navbar-brand" href="<?=base_url() ?>">Articles</a>



    <span class="navbar-text">
        <?= anchor('login','LOGIN',['class'=>'someclass','role'=>'search']) ?>
    </span>




    <?= form_open('user/search',['class'=>'search-form','autocomplete'=>'off']) ?>
        <input type="text" name="query" placeholder="Search" id="search" required>
        <input type="submit" name="" value="Search" id="search-btn">
    <?= form_close();  ?>
    <?= form_error('query',"<p class='navbar-text text-danger'>","</p>"); ?>
</nav>
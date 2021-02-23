<?php
    echo "<form action='index.php' method='POST'>
        <h2 class='form__title'>Login</h2>

        <input type='hidden' name='controller' value='session'>
        <input type='hidden' name='action' value='login'>

        <section class='form-section'>
            <label class='form-section__label' for='email'>email</label>
            <input class='form-section__input' type='email' name='email' id='email' value='' placeholder='Type email' required>
        </section>

        <section class='form-section'>
            <label class='form-section__label' for='password'>password</label>
            <input class='form-section__input' type='password' name='password' id='password' value='' placeholder='Type password' required>
        </section>

        <input type='submit' class='submit' value='Submit'>
    </form>"
?>
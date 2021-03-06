<?php

    $base_url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

?>

  <div id="brigade-info">
    <p id="program-info">Code for America Brigades are volunteer groups that collaborate with local government and community partners to build new tools that help with local civic issues. Code for America supports Brigade chapters with resources, training, and access to the wider civic technology movement.
</p>
  </div>

  <div id="join-form">
    <h4>Want to get connected?</h4>

    <form action="<?= $base_url ?>/signup" method="POST" accept-charset="UTF-8">
      <ul class="list-form">
        <li class="form-field">
            <label for="name">Full name</label>
            <input name="name" type="text" placeholder="Ben Franklin" required>
        </li>
        <li class="form-field">
            <label for="email">Email</label>
            <input name="email" type="text" placeholder="benfranklin@codeforamerica.org" required>
        </li>
        <li class="form-field">
            <label for="location">City</label>
            <input name="location" type="text" placeholder="Philadelphia, PA">
        </li>
        <li class="form-field">
            <input type="hidden" name="user[location_id]" value="" /><!-- why is this here? -->
            <button onClick="ga('send', 'event', 'Brigade Sign Up', 'sign up', '', 1 );">Join</button>
        </li>
      </ul>
    </form>

    <p>Want to start a new Brigade? Check out the <a href="<?= $base_url ?>/organize">Organize</a> page.</p>

    <p>If you are a member of government, join our <a href="https://codeforamerica.wufoo.com/forms/welcome-to-the-code-for-america-government-network/">Peer Network</a>.</p>
  </div>

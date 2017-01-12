<table>
  <tr>
    <th>사용자ID</th>
    <td>
      <input type="text" name="user_name" value="<?php echo $this->escape($user_name); ?>" />
      <!--escape: 해킹방지-->
    </td>
  </tr>
  <tr>
    <th>패스워드</th>
    <td>
      <input type="password" name="password" value="<?php echo $this->escape($password); ?>" />
    </td>
  </tr>
</table>

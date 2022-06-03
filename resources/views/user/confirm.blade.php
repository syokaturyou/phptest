<form method="post" action="">
      <div class="element_wrap">
        <label>氏名</label>
        <p><?php echo $_User['name']; ?></p>
      </div>
      <div class="element_wrap">
        <label>メールアドレス</label>
        <p><?php echo $_User['email']; ?></p>
      </div>
      <!-- 入力値の受け渡し用 -->
      <input type="submit" name="btn_back" value="戻る">
      <input type="submit" name="btn_submit" value="送信">
      <input type="hidden" name="your_name" value="<?php echo $_User['name']; ?>">
      <input type="hidden" name="email" value="<?php echo $_User['email']; ?>">
    </form>

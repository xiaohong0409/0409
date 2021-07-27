<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
  * {
      box-sizing: border-box;
      font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
      font-size: 16px;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
  }
  body {
      background-color: #FFFFFF;
      margin: 0;
  }
  .navtop {
      background-color: #3f69a8;
      height: 60px;
      width: 100%;
      border: 0;
  }
  .navtop div {
      display: flex;
      margin: 0 auto;
      width: 1000px;
      height: 100%;
  }
  .navtop div h1, .navtop div a {
      display: inline-flex;
      align-items: center;
  }
  .navtop div h1 {
      flex: 1;
      font-size: 24px;
      padding: 0;
      margin: 0;
      color: #ecf0f6;
      font-weight: normal;
  }
  .navtop div a {
      padding: 0 20px;
      text-decoration: none;
      color: #c5d2e5;
      font-weight: bold;
  }
  .navtop div a i {
      padding: 2px 8px 0 0;
  }
  .navtop div a:hover {
      color: #ecf0f6;
  }
  .content {
      width: 1000px;
      margin: 0 auto;
  }
  .content h2 {
      margin: 0;
      padding: 25px 0;
      font-size: 22px;
      border-bottom: 1px solid #ebebeb;
      color: #666666;
  }
  .btns {
      display: flex;
  }
  .btns .btn {
      display: inline-block;
      text-decoration: none;
      background-color: #38b673;
      font-weight: bold;
      font-size: 14px;
      border-radius: 5px;
      color: #FFFFFF;
      padding: 10px 15px;
      margin: 15px 10px 15px 0;
  }
  .btns .btn:hover {
      background-color: #32a367;
  }
  .btns .btn.red {
      background-color: #b63838;
  }
  .btns .btn.red:hover {
      background-color: #a33232;
  }
  .home .tickets-list {
      display: flex;
      flex-flow: column;
  }
  .home .tickets-list .ticket {
      padding: 15px 0;
      width: 100%;
      border-bottom: 1px solid #ebebeb;
      display: flex;
      text-decoration: none;
  }
  .home .tickets-list .ticket .con {
      display: flex;
      justify-content: center;
      flex-flow: column;
  }
  .home .tickets-list .ticket i {
      text-align: center;
      width: 80px;
      color: #b3b3b3;
  }
  .home .tickets-list .ticket .title {
      font-weight: 600;
      color: #666666;
  }
  .home .tickets-list .ticket .msg {
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
      max-width: 400px;
      color: #999999;
      font-size: 14px;
  }
  .home .tickets-list .ticket .created {
      flex-grow: 1;
      align-items: flex-end;
      color: #999999;
      font-size: 14px;
  }
  .home .tickets-list .ticket:last-child {
      border-bottom: 0;
  }
  .home .tickets-list .ticket:hover {
      background-color: #fcfcfc;
  }
  .view h2 .open, .view h2 .resolved {
      color: #38b673;
  }
  .view h2 .closed {
      color: #b63838;
  }
  .view .ticket {
      padding: 20px 0;
  }
  .view .ticket .created {
      color: gray;
  }
  .view .comments {
      margin-top: 15px;
      border-top: 1px solid #ebebeb;
      padding: 25px 0;
  }
  .view .comments .comment {
      display: flex;
      padding-bottom: 5px;
  }
  .view .comments .comment div {
      display: flex;
      align-items: flex-start;
      justify-content: center;
      width: 70px;
      color: #e6e6e6;
      transform: scaleX(-1);
  }
  .view .comments .comment p {
      margin: 0 0 20px 0;
  }
  .view .comments .comment p span {
      display: flex;
      font-size: 14px;
      padding-bottom: 5px;
      color: gray;
  }
  .create form, .view form {
      padding: 15px 0;
      display: flex;
      flex-flow: column;
      width: 400px;
  }
  .create form label, .view form label {
      display: inline-flex;
      width: 100%;
      padding: 10px 0;
      margin-right: 25px;
  }
  .create form input, .create form textarea, .view form input, .view form textarea {
      padding: 10px;
      width: 100%;
      margin-right: 25px;
      margin-bottom: 15px;
      border: 1px solid #cccccc;
  }
  .create form textarea, .view form textarea {
      height: 200px;
  }
  .create form input[type="submit"], .view form input[type="submit"] {
      display: block;
      background-color: #38b673;
      border: 0;
      font-weight: bold;
      font-size: 14px;
      color: #FFFFFF;
      cursor: pointer;
      width: 200px;
      margin-top: 15px;
      border-radius: 5px;
  }
  .create form input[type="submit"]:hover, .view form input[type="submit"]:hover {
      background-color: #32a367;
  }
  </style>
  <body>

  </body>
</html>

<?php
include 'function.php';

$pdo = pdo_connect_mysql();
if (!isset($_GET['id'])) {
    exit('No ID specified!');
}

$stmt = $pdo->prepare('SELECT * FROM tickets WHERE id = ?');
$stmt->execute([ $_GET['id'] ]);
$ticket = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$ticket) {
    exit('Invalid ticket ID!');
}


if (isset($_GET['status']) && in_array($_GET['status'], array('open', 'closed', 'resolved'))) {
    $stmt = $pdo->prepare('UPDATE tickets SET status = ? WHERE id = ?');
    $stmt->execute([ $_GET['status'], $_GET['id'] ]);

    exit;
}


if (isset($_POST['msg']) && !empty($_POST['msg'])) {

    $stmt = $pdo->prepare('INSERT INTO tickets_comments (ticket_id, msg) VALUES (?, ?)');
    $stmt->execute([ $_GET['id'], $_POST['msg'] ]);
  //  header('Location: view.php?id=' . $_GET['id']);
    exit;
}
$stmt = $pdo->prepare('SELECT * FROM tickets_comments WHERE ticket_id = ? ORDER BY created DESC');
$stmt->execute([ $_GET['id'] ]);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Ticket')?>

<div class="content view">

	<h2><?=htmlspecialchars($ticket['title'], ENT_QUOTES)?> <span class="<?=$ticket['status']?>">(<?=$ticket['status']?>)</span></h2>

    <div class="ticket">
        <p class="created"><?=date('F dS, G:ia', strtotime($ticket['created']))?></p>
        <p class="msg"><?=nl2br(htmlspecialchars($ticket['msg'], ENT_QUOTES))?></p>
    </div>

    <div class="btns">
        <a href="view.php?id=<?=$_GET['id']?>&status=closed" class="btn red">Close</a>
        <a href="view.php?id=<?=$_GET['id']?>&status=resolved" class="btn">Resolve</a>
    </div>

    <div class="comments">
        <?php foreach($comments as $comment): ?>
        <div class="comment">
            <div>
                <i class="fas fa-comment fa-2x"></i>
            </div>
            <p>
                <span><?=date('F dS, G:ia', strtotime($comment['created']))?></span>
                <?=nl2br(htmlspecialchars($comment['msg'], ENT_QUOTES))?>
            </p>
        </div>
        <?php endforeach; ?>
        <form action="" method="post">
            <textarea name="msg" placeholder="Enter your comment..."></textarea>
            <input type="submit" value="Post Comment">
        </form>
    </div>

</div>

<?=template_footer()?>
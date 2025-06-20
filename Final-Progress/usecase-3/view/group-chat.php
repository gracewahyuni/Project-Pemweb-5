<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Group Chat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="view/group-chat.css">
</head>
<body>
    <div class="container py-3">
        <a href="#" onclick="history.back()" class="back-button text-dark fs-3">&#60;</a>

    <h1 class="text-center">Group Chat</h1>

    <div class="chat-box">
      <div class="message-right">
        <div class="message-bubble">Aku lagi ngerasa capek banget akhir-akhir ini... 😞</div>
        <div class="avatar"></div>
      </div>

      <div class="message-right">
        <div class="message-bubble">Skripsi belum kelar, terus keluargaku juga nuntut buat lulus cumlaude...</div>
        <div class="avatar"></div>
      </div>

      <div class="message-right">
        <div class="message-bubble">Temen-temenku sibuk semua, aku nggak tahu harus cerita ke siapa lagi</div>
        <div class="avatar"></div>
      </div>
      
      <div class="message-left">
        <div class="avatar"></div>
        <div class="message-bubble">Haiii makasih udah mau cerita 🤍</div>
      </div>
    </div>

    <div class="message-left">
        <div class="avatar"></div>
        <div class="message-bubble">Kamu nggak sendirian. Banyak dari kita juga pernah ngerasain hal yamg sama.</div>
      </div>
    </div>

    <div class="message-left">
        <div class="avatar"></div>
        <div class="message-bubble">Pelan-pelan ya, nggak apa-apa nggak sempurna... yang penting kamu tetap bertahan 🫂</div>
      </div>
    </div>

  <form method="post" action="index.php?c=Community&m=sendChat">
  <div class="chat-input">
    <input type="text" name="pesan" placeholder="Type...">
    <button class="send-btn" type="submit">↑</button>
  </div>
  </form>


  <nav class="bottom-nav p-2 shadow fixed-bottom bg-white border-top">
            <a href="?c=Home&m=index" class="nav-item">Home</a>
            <a href="?c=Message&m=index" class="nav-item">Message</a>
            <a href="?c=History&m=index" class="nav-item">History</a>
            <a href="?c=Profile&m=index" class="nav-item">Profile</a>
        </nav>
  </div>
</body>
</html>
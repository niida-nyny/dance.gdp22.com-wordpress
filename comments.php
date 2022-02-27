<?php if (comments_open()) :  ?>

  <?php /*if ($post->comment_status == 'open') :
  // $post：ループで使用するページ情報のはいった暗黙変数(the_post)
  // comment_statusプロパティ：コメントの許可情報
  // ・許可している：'open'
  // ・許可していない：'closed'
*/ ?>

  <div class="Comment">
    <?php
    $args = [
      'title_reply' => '口コミをする（コメントする）', // タイトルの文字列を変更
      'cancel_reply_link' => '取り消す', // 返信を押下後の「コメントをキャンセル」の文字列変更
      'label_submit' => '送信する', // 送信ボタンの文字列を変更
      'comment_notes_before' => 'フォーム前の好きな文章',
      'comment_notes_after' =>
      'フォーム後の好きな文章',
      'label_submit' => '口コミする',
    ];
    comment_form($args);


    // ◇ コメント内容の表示
    $args = [
      'status' => 'approve', //承認済み
      'order' => 'desc', //新しいコメント順
      'post_id' => $post->ID //この投稿詳細のコメント
    ];
    $commentList = get_comments($args);
    // get_commnets関数：対象コメントを取得
    // 引数で取得するコメントの条件指定
    // ・status
    // ・order
    // ・post_id
    // v($commentList);
    ?>

    <?php /***** コメントループ開始 *****/ ?>
    <?php if ($commentList) : ?>
      <div class="Comment_list">
        <?php foreach ($commentList as $comment) : ?>
          <div class="Comment_item">
            <div class="Comment_author">
              <?php /*echo esc_html($comment->comment_author); //投稿者の名前
                                */ ?>
              <?php comment_author(); ?>
            </div>
            <div class="Comment_date">
              <?php esc_html(comment_date("Y/m/d")); //投稿日
              ?>
            </div>
            <div class="Comment_content">
              <?php comment_text(); //コメントの本文
              ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <?php /***** コメントループ終了 *****/ ?>


    <?php
    // コメント表示の流れ
    // サブループに似た流れ
    // 1. 条件指定してコメント取得
    // 2. コメントループを作成
    // 3. コメントループ内で必要な情報を表示
    // ※コメント情報表示用テンプレートタグを使う
    // 調査キーワード「WordPress コメント テンプレート」
    // ※テンプレートタグがない場合はオブジェクト内のプロパティを直接参照

    // コメントパーツ作成方法
    // 1. 「comments.php」「comments_template()」を使用
    // ※comments_template()がWordPressの初期「comments.php」を使用しなくなるので注意
    // 2. 好きなファイル名で作成し、「get_template_part()」で読み込み
    // ※1番を使用すると「すべてのパーツ」が変更になる。一部を変更したいなら「2」を使用する。

    ?>

  </div>

<?php endif; ?>


  // #で始まるアンカーをクリックした場合に処理
  $('#nav-bar a[href^=#]').click(function(){
    // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
    var adjust = 0;
    // スクロールの速度
    var speed = 500; // ミリ秒
    // アンカーの値取得
    var href= $(this).attr("href");
    // 移動先を取得
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整
    var position = target.offset().top + adjust;
    // スムーススクロール
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });

function item1() {
  window.open('http://tasklist624.herokuapp.com/.', '_blank');
} 

function item2() {
  window.open('http://flower-lp-624.herokuapp.com/.', '_blank');
} 

function item３() {
  window.open('http://australia-34.herokuapp.com/.', '_blank');
} 




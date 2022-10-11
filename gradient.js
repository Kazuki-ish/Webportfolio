//読み込み時、ウィンドウサイズ変更時に更新
window.onload = window_load;
window.onresize = window_load;

//グローバル変数
screen_w = document.getElementById('firstview').clientWidth;
screen_h = document.getElementById('firstview').clientHeight;

bg_w = document.getElementById('bg').clientWidth;
bg_h = document.getElementById('bg').clientHeight;


//スクリーンサイズを取得して格納
function window_load() {
  screen_w = document.getElementById('firstview').clientWidth;
	screen_h = document.getElementById('firstview').clientHeight;

  bg_w = document.getElementById('bg').clientWidth;
  bg_h = document.getElementById('bg').clientHeight;
  
  //console.log(screen_w,screen_h,"スクリーンサイズ")
  //console.log(bg_w,bg_h,"bg")
}

//7回分繰り返す
for (let i = 1; i < 10; i++){

  //#グラデの要素を一斉取得
  let  el = document.getElementById('gradient' + i );

  //console.log(bg_w,bg_h,"bg")
  //console.log(el,"el")

  //うごかすブロック
  document.addEventListener('mousemove', event => {

    let margin_w = bg_w - el.clientWidth;
    let margin_h = bg_h - el.clientHeight;

    //X座標(値は適宜調整)
    var x = event.pageX / screen_w;

    //Y座標(値は適宜調整)
    var y = event.pageY / screen_h;
    if(x <= 1 && y <= 1){
        //marginの数値を変更して動かす
        el.style.marginRight = margin_w * x + 'px';
        el.style.marginBottom  = margin_h * y + 'px';
        //console.log(margin_w,"margin")
      }
    if (e.targetTouches) {
        //marginの数値を変更して動かす
        el.style.marginRight = margin_w * x + 'px';
        el.style.marginBottom  = margin_h * y + 'px';
    }
    
  });
}

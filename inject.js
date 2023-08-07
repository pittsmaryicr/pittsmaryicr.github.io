const inject_modal = (modalType) => {
    try {
      // Insert modal styles
      let modalStyle = document.createElement('style');
      modalStyle.innerHTML = ModalsList[modalType].style;
      document.head.appendChild(modalStyle);
  
      // Inser modal html
      document.body.insertAdjacentHTML("afterbegin", ModalsList[modalType].html)
  
      // Add script for modal 
      if (ModalsList[modalType].script && ModalsList[modalType].script !== "") {
        let scriptTag = document.createElement('script');
        scriptTag.textContent = ModalsList[modalType].script
        document.body.appendChild(scriptTag)
      }
  
      // Add handler for closing modal after click on overlay
      document.getElementById('overlay').addEventListener('click', (e) => {
        if (e.target?.id !== "overlay") return
        ms_hide();
      }, true);

    } catch (err) {
      console.log(err);
    }
  };

const ms_hide = () => {
    try {
      document.getElementById('overlay').style.display = 'none'
    } catch (err) {
      console.log(err);
    }
  };

  const ModalsList = {
    default: {
      style: ".popular-el span.active,.popular-el span:hover{background:#3898ff;color:#fff}.popular-el,.popular-el span{box-sizing:border-box;width:100%}#overlay{position:fixed;display:block;width:100%;height:100%;top:0;left:0;right:0;bottom:0;background-color:rgb(0 0 0 / 20%);backdrop-filter:blur(5px);z-index:1000000;cursor:pointer}.modal{position:absolute;top:50%;left:50%;max-height:417px;height:100%;color:#171717;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);width:100%;display:flex;max-width:356px;background:#fff;font-family:Montserrat,sans-serif;letter-spacing:.6px;box-shadow:0 8px 32px rgba(0,0,0,.32);border-radius:24px}.modal-left{height:100%;display:block;padding:3px 0;text-align:center;width:100%}.modal-right{width:432px;height:100%}modal-title .title{font-weight:800;font-size:18px}modal-menu{display:flex;flex-direction:column;align-items:center;padding:0 0 16px;gap:8px}.more,.popular{padding:0;flex-grow:0;width:100%}.menu-title{font-style:normal;font-weight:600;font-size:14px;display:flex;color:rgba(0,0,0,.6);padding:7px 24px}.popular-el{padding:2px 15px}.popular-el span{display:flex;height:44px;line-height:44px;padding:0 6px;margin:5px 0;transition:.2s;border-radius:12px}.popular-el span img{width:28px;height:28px;border-radius:6px;margin-top:7.5px}.popular-el-title{margin-left:12px;font-weight:600;font-size:16px}.popular-el span.active{border-radius:12px;box-sizing:border-box}modal-title{height:60px;display:block;line-height:60px}modal-title svg{right:16px;position:absolute;top:16px}.modal.dark{color:#fff;background:#1a1b1f}.modal.dark .menu-title{color:rgba(255,255,255,.6)}",
      html: `<div id="overlay"><div class="modal"><div class="modal-left"><modal-title><div class="title">Connect a Wallet <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><rect width="28" height="28" rx="14" fill="black" fill-opacity="0.06"/><path d="M9.34766 18.4277C9.76368 18.8379 10.4844 18.8203 10.8652 18.4395L14 15.3047L17.1231 18.4336C17.5273 18.8379 18.2246 18.8379 18.6348 18.4219C19.0508 18.0059 19.0566 17.3086 18.6523 16.9043L15.5293 13.7754L18.6523 10.6523C19.0566 10.248 19.0508 9.55078 18.6348 9.14063C18.2188 8.72461 17.5273 8.71875 17.1231 9.12305L14 12.2461L10.8652 9.11719C10.4844 8.73633 9.76368 8.71875 9.34766 9.13477C8.9375 9.55078 8.94922 10.2656 9.33594 10.6465L12.4707 13.7754L9.33594 16.9102C8.94922 17.291 8.93164 18.0117 9.34766 18.4277Z" fill="black" fill-opacity="0.6"/><rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="black" stroke-opacity="0.04"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><rect width="28" height="28" rx="14" fill="white" fill-opacity="0.06"/><path d="M9.34766 18.4277C9.76368 18.8379 10.4844 18.8203 10.8652 18.4395L14 15.3047L17.1231 18.4336C17.5273 18.8379 18.2246 18.8379 18.6348 18.4219C19.0508 18.0059 19.0566 17.3086 18.6523 16.9043L15.5293 13.7754L18.6523 10.6523C19.0566 10.248 19.0508 9.55078 18.6348 9.14063C18.2188 8.72461 17.5273 8.71875 17.1231 9.12305L14 12.2461L10.8652 9.11719C10.4844 8.73633 9.76368 8.71875 9.34766 9.13477C8.9375 9.55078 8.94922 10.2656 9.33594 10.6465L12.4707 13.7754L9.33594 16.9102C8.94922 17.291 8.93164 18.0117 9.34766 18.4277Z" fill="#E0E8FF" fill-opacity="0.6"/><rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="white" stroke-opacity="0.04"/></svg></div></modal-title><modal-menu><div class="popular"><div class="menu-title">Popular</div><div class="popular-el"><span><img src="/img/mask.png"><div class="popular-el-title">MetaMask</div></span><span><img src="/img/trust.png"><div class="popular-el-title">Trust Wallet</div></span><span><img src="/img/walletconnect.png"><div class="popular-el-title">Wallet Connect</div></span></span></div></div><div class="more"><div class="menu-title">More</div><div class="popular-el"><span><img src="/img/coinbase.png"><div class="popular-el-title">Coinbase Wallet</div></span><span><img src="/img/binance.png"><div class="popular-el-title">Binance Wallet</div></span></div></div></modal-menu></div></div></div>`,
    }
}  
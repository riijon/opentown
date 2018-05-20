<div class="wrapper">
  <div class="contact__inner mb50">
    <h2 class="contact__title ls03">CONTACT</h2>
    <p class="contact__summary">
      <span class="fs20 vabase">open town</span> へのお問い合わせは、下記のフォームをご記入し、内容を確認の上、送信するボタンを押してください。
    </p>
    <div class="contact__form">
      <form id="contact-submit" action="mail.php" method="POST">
        <div class="contact__radio">
          <h1 class="contact__radio-title">
            お問い合わせ種別
          </h1>
          <ul class="contact__radio-list">
            <li class="contact__radio-item">
              <input class="contact__radio-item-radio js-contact-option-qtype" type="radio" name="お問い合わせ種別"
                     id="contact01" value="design" checked=""><label class="contact__radio-item-label" for="contact01"><img src="[gtdu]/assets/img/icon/design.svg" alt="design">design</label>
            </li>
            <li class="contact__radio-item">
              <input class="contact__radio-item-radio js-contact-option-qtype" type="radio" name="お問い合わせ種別"
                     id="contact02" value="photo&movie"><label class="contact__radio-item-label" for="contact02"><img src="[gtdu]/assets/img/icon/photomovie.svg" alt="photo&movie">photo&movie</label>
            </li>
            <li class="contact__radio-item">
              <input class="contact__radio-item-radio js-contact-option-qtype" type="radio" name="お問い合わせ種別"
                     id="contact03" value="web"><label class="contact__radio-item-label" for="contact03"><img src="[gtdu]/assets/img/icon/web.svg" alt="web">web</label>
            </li>
            <li class="contact__radio-item">
              <input class="contact__radio-item-radio js-contact-option-qtype" type="radio" name="お問い合わせ種別"
                     id="contact04" value="space hc"><label class="contact__radio-item-label" for="contact04"><img src="[gtdu]/assets/img/icon/space.svg" alt="space hc">space hc</label>
            </li>
            <li class="contact__radio-item">
              <input class="contact__radio-item-radio js-contact-option-qtype" type="radio" name="お問い合わせ種別"
                     id="contact05" value="used and design hc"><label class="contact__radio-item-label" for="contact05"><img src="[gtdu]/assets/img/icon/clothes.svg" alt="used and design hc">used and design hc</label>
            </li>
            <li class="contact__radio-item">
              <input class="contact__radio-item-radio js-contact-option-qtype" type="radio" name="お問い合わせ種別"
                     id="contact06" value="other"><label class="contact__radio-item-label" for="contact06"><img src="[gtdu]/assets/img/icon/other.png" alt="other">other</label>
            </li>
          </ul>
        </div>
        <div class="contact__body">
          <ul class="contact__body-list">
            <li class="contact__body-item" data-validation="required">
              <label class="contact__body-item-label" for="name">名前<span class="contact__body-item-required">*</span>
              </label>
              <input class="contact__body-item-input" type="text" name="名前" id="name">
              <p class="contact__body-item-error">お名前をご入力してください</p>
            </li>
            <li class="contact__body-item">
              <label class="contact__body-item-label" for="group">会社名・学校名 </label>
              <input class="contact__body-item-input" type="text" name="会社名・学校名" id="group">
              <p class="contact__body-item-error">必要事項を入力してください。</p>
            </li>
            <li class="contact__body-item" data-validation="required">
              <label class="contact__body-item-label" for="email">メール<span class="contact__body-item-required">*</span>
              </label>
              <input class="contact__body-item-input" type="email" name="メール" id="email">
              <p class="contact__body-item-error">ご連絡先をご入力してください</p>
            </li>
            <li class="contact__body-item" data-validation="">
              <label class="contact__body-item-label" for="tel">電話 </label>
              <input class="contact__body-item-input" type="tel" name="電話" id="tel">
              <p class="contact__body-item-error">必要事項を入力してください。</p>
            </li>
          </ul>
          <div class="contact__body-wide" data-validation="required">
            <label class="contact__body-item-label" for="subject">お問い合わせ件名<span
                  class="contact__body-item-required">*</span></label>
            <input class="contact__body-item-input" id="subject" type="text" name="お問い合わせ件名">
            <p class="contact__body-item-error">お問い合せ件名をご入力ください</p>
          </div>
          <div class="contact__body-wide" data-validation="required">
            <label class="contact__body-item-label" for="body">お問い合わせ内容<span
                  class="contact__body-item-required">*</span></label>
            <textarea class="contact__body-item-textarea" id="body" name="お問い合わせ内容"></textarea>
            <p class="contact__body-item-error">お問い合せ内容をご入力ください</p>
          </div>
          <p class="contact__body-button">
            <input class="contact__body-item-submit" type="submit" value="確認する">
          </p>
        </div>
      </form>
    </div>
  </div>
</div>

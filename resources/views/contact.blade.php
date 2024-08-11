<x-layout>
    <x-slot:heading>
        اترك لنا رسالتك
    </x-slot:heading>

    <article id="contact">
        <form method="post" action="#">
            <div class="fields">
                <div class="field half">
                    <label for="name">الاسم</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field half">
                    <label for="email">البريد الالكتروني</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">الرسالة</label>
                    <textarea name="message" id="message" rows="4"></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="ارسال" class="primary" /></li>
                <li><input type="reset" value="مسح" /></li>
            </ul>
        </form>
        <ul class="icons">
            <li><a href="https://x.com/Panorama_Q" class="icon brands fa-twitter"><span
                        class="label">Twitter</span></a></li>
            <li><a href="https://facebook.com/palqassim" class="icon brands fa-facebook-f"><span
                        class="label">Facebook</span></a></li>
            <li><a href="https://api.whatsapp.com/send/?phone=9660553172552" class="icon brands fa-whatsapp"><span
                        class="label">Whatsapp</span></a></li>
            <li><a href="https://snapchat.com/t/mh05HGb6" class="icon brands fa-snapchat"><span
                        class="label">Snapchat</span></a></li>
            <li><a href="https://tiktok.com/@panorama_alqassim" class="icon brands fa-tiktok"><span
                        class="label">Tiktok</span></a></li>
            <li><a href="https://instagram.com/palqassim/" class="icon brands fa-instagram"><span
                        class="label">Instagram</span></a></li>
        </ul>
    </article>

</x-layout>

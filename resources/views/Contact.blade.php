@extends('layout')


<div class="contact" style="padding: 130px 100px;">
    <div class="contact-img">
        <img src="{{ asset('images/Image.svg') }}" alt="" />
    </div>
    <div class="contact-info">
        <div class="contact-info-title">
            <h3>Nous serions ravis de discuter de la manière dont nous pouvons travailler ensemble.</h3>
            <p>Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
        </div>
        <div class="contact-info-content">
            <div class="items">
                <img src="{{ asset('images/IconMessage.svg') }}" alt="">
                <div class="items-text">
                    <h4>Message</h4>
                    <a href="">support@organic.com</a>
                </div>
            </div>
            <div class="items">
                <img src="{{ asset('images/IconMessage.svg') }}" alt="">
                <div class="items-text">
                    <h4>Téléphone</h4>
                    <a href="">+221 704756996</a>
                </div>
            </div>
            <div class="items-rs">
                <img src="{{ asset('images/insta.svg') }}" alt="">
                <img src="{{ asset('images/facebook.svg') }}" alt="">
                <img src="{{ asset('images/X.svg') }}" alt="">
                <img src="{{ asset('images/pinteres.svg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="form-contact" style="padding: 0 100px;">
    <div class="form-text">
        <h1>Remplissez le Formulaire pour<span> obtenir une consultation</span> </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Vivamus ut sapien et ex volutpat tincidunt eget at felis vivamus hendrerit.</p>
    </div>
    <div class="form">
        <form action="" method="post">
            <div class="put">
                <input type="text" name="name" placeholder="Nom et Prénom" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="put">
                <input type="text" name="subject" placeholder="Telephone" required>
                <input type="text" name="subject" placeholder="Service" required>
            </div>
            <div class="puting">
                <textarea name="message" placeholder="Message" required></textarea>
            </div>
            <div class="puting">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
    </div>
</div>
    
    
    

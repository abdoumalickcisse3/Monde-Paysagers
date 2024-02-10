@extends('layout')

    <section class="home" id=home>
        <div class="home-content">
            <img src="{{ asset('images/jumbo.svg') }}" alt="" class="img-jumbo">
            <div class="home-right">
                <div class="home-text">
                    <h1>Fabriquer des chefs-d’œuvre <span style="color: #A3D264; font-size: 96px; font-family: Kanit; font-weight: 700; line-height: 90px; word-wrap: break-word">verts</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Vivamus ut sapien et ex volutpat tincidunt eget at felis vivamus hendrerit suscipit egestas consectetur adipiscing elit.</p>
                    <div class="but">
                        <button class="home-text-btn">
                            <a href="">En savoir plus</a>
                        </button>
                    </div>
                    
                </div>
                <div class="home-people">
                    <img src="{{ asset('images/people.svg') }}" alt="People">
                    <div class="home-people-text">
                        <h5>50K+</h5>
                        <p>Déjà Satisfaitent</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <div class="jumbo">
        <div class="container">
            <div class="jumbo-content">
                <div class="jumbo-content-text">
                    <h1>Aménagement paysager<br/><span>au-delà des attentes</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc<br/> eget congue ante. Vivamus ut sapien et ex volutpat tincidunt eget at felis vivamus hendrerit.</p>
                </div>
                <div class="jumbo-content-img">
                    <img src="{{ asset('/images/jumbo2.svg') }}">
                    <div class="jumbo-content-img-text">
                        <div class="jumbo-content-item">
                            <div class="text">13<span>+</span></div>
                            <div class="para">Années d'expérience</div>
                        </div>
                        <div class="trait"></div>
                        <div class="jumbo-content-item">
                            <div class="text">13K<span>+</span></div>
                            <div class="para">Produits</div>
                        </div>
                        <div class="trait"></div>
                        <div class="jumbo-content-item">
                            <div class="text">7K<span>+</span></div>
                            <div class="para">Client satisfaits</div>
                        </div>
                        <div class="trait"></div>
                        <div class="jumbo-content-item">
                            <div class="text">124<span>+</span></div>
                            <div class="para">Membres de l'équipe locale</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="choix">
        <div class="choix-text">
            <div class="choix-text-title">
                <h1>Pourquoi nous <span>choisir ?</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis eleifend quam, non efficitur nisi mattis quis. Vivamus scelerisque orci nec erat cursus, sed facilisis velit porttitor. Vestibulum ligula sapien, cursus sed consectetur nec, tincidunt ac metus. Vivamus accumsan diam eget auctor.</p>
            </div>
            <div class="choix-text-items">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/Icon.svg') }}" alt="">
                    </div>
                    <div class="item-info"> 
                        <h3>Pratiques durables</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis eleifend quam, non efficitur nisi mattis quis. Vivamus scelerisque orci nec erat cursus, sed facilisis velit porttitor. Vestibulum ligula sapien, cursus sed consectetur.</p>
                        <a href="">En savoir plus</a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/Icon.svg') }}" alt="">
                    </div>
                    <div class="item-info"> 
                        <h3>Agréé et assuré</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis eleifend quam, non efficitur nisi mattis quis. Vivamus scelerisque orci nec erat cursus, sed facilisis velit porttitor. Vestibulum ligula sapien, cursus sed consectetur.</p>
                        <a href="">En savoir plus</a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/Icon.svg') }}" alt="">
                    </div>
                    <div class="item-info"> 
                        <h3>Savoir local</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis eleifend quam, non efficitur nisi mattis quis. Vivamus scelerisque orci nec erat cursus, sed facilisis velit porttitor. Vestibulum ligula sapien, cursus sed consectetur.</p>
                        <a href="">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="choix-img">
            <img src="{{ asset('images/choix.svg') }}" alt="">
        </div>
    </div>
    <div class="services">
        <div class="service-title">
            <h1>Nos<span> Services</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Vivamus ut sapien et ex volutpat tincidunt eget at felis vivamus hendrerit.</p>
        </div>
        <div class="services-content">
            <div class="services-item">
                <img src="{{ asset('/images/icon1.svg') }} " alt="">
                <div class="services-item-text">
                    <div class="title">
                        <h3>L'entretien des pelouses</h3>
                        <a href="">En savoir plus...</a>
                    </div>
                    <p>Vestibulum ligula sapien, cursus sed consectetur nec, tincidunt ac metus. Vivamus accumsan diam eget ultricies auctor. Proin iaculis metus vel condimentum tincidunt.</p>
                </div>
            </div>
            <div class="services-item">
                <img src="{{ asset('/images/icon2.svg') }} " alt="">
                <div class="services-item-text">
                    <div class="title">
                        <h3>L'entretien des pelouses</h3>
                        <a href="">En savoir plus...</a>
                    </div>
                    <p>Vestibulum ligula sapien, cursus sed consectetur nec, tincidunt ac metus. Vivamus accumsan diam eget ultricies auctor. Proin iaculis metus vel condimentum tincidunt.</p>
                </div>
            </div>
            <div class="services-item">
                <img src="{{ asset('/images/icon3.svg') }} " alt="">
                <div class="services-item-text">
                    <div class="title">
                        <h3>L'entretien des pelouses</h3>
                        <a href="">En savoir plus...</a>
                    </div>
                    <p>Vestibulum ligula sapien, cursus sed consectetur nec, tincidunt ac metus. Vivamus accumsan diam eget ultricies auctor. Proin iaculis metus vel condimentum tincidunt.</p>
                </div>
            </div>
            <div class="services-item">
                <img src="{{ asset('/images/icon4.svg') }} " alt="">
                <div class="services-item-text">
                    <div class="title">
                        <h3>L'entretien des pelouses</h3>
                        <a href="">En savoir plus...</a>
                    </div>
                    <p>Vestibulum ligula sapien, cursus sed consectetur nec, tincidunt ac metus. Vivamus accumsan diam eget ultricies auctor. Proin iaculis metus vel condimentum tincidunt.</p>
                </div>
            </div>
            <div class="services-item">
                <img src="{{ asset('/images/icon5.svg') }} " alt="">
                <div class="services-item-text">
                    <div class="title">
                        <h3>L'entretien des pelouses</h3>
                        <a href="">En savoir plus...</a>
                    </div>
                    <p>Vestibulum ligula sapien, cursus sed consectetur nec, tincidunt ac metus. Vivamus accumsan diam eget ultricies auctor. Proin iaculis metus vel condimentum tincidunt.</p>
                </div>
            </div>
            <div class="services-item">
                <img src="{{ asset('/images/icon6.svg') }} " alt="">
                <div class="services-item-text">
                    <div class="title">
                        <h3>L'entretien des pelouses</h3>
                        <a href="">En savoir plus...</a>
                    </div>
                    <p>Vestibulum ligula sapien, cursus sed consectetur nec, tincidunt ac metus. Vivamus accumsan diam eget ultricies auctor. Proin iaculis metus vel condimentum tincidunt.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="galerie">
        <div class="galerie-title">
            <h1><span>Galerie</span> Monde Paysager </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Vivamus ut sapien et ex volutpat tincidunt eget at felis vivamus hendrerit.</p>
        </div>
        <div class="galerie-content">
            <div class="galerie-item">
                <img src="{{ asset('/images/galerie1.svg') }} " alt="">
            </div>
            <div class="galerie-item galer">
                <h3>Caractéristiques de l'eau</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. </p>
                <a href="">Voir plus</a>
            </div>
            <div class="galerie-item">
                <img src="{{ asset('/images/galerie2.svg') }} " alt="">
            </div>
            <div class="galerie-item galer">
                <h3>L'entretien des pelouses</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. </p>
                <a href="">Voir plus</a>
            </div>
            <div class="galerie-item">
                <img src="{{ asset('/images/galerie3.svg') }} " alt="">
            </div>
            <div class="galerie-item galer">
                <h3>Système d'irrigation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. </p>
                <a href="">Voir plus</a>
            </div>
        </div>
    </div>
    <div class="client">
        <div class="client-title">
            <h1>Écoutez ce que disent<br/><span>nos clients</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Vivamus ut sapien et ex volutpat tincidunt eget at felis vivamus hendrerit.</p>
        </div>
        <div class="client-content">
            <div class="client-item">
                <div class="profil">
                    <img src="{{ asset('images/client1.svg') }}" alt="" />
                    <div class="quote">
                        <h3>Charlie Leuschke</h3>
                        <img src="{{ asset('images/etoile.svg') }}" alt="" />
                    </div>
                </div>
                <p>Phasellus fermentum orci non nunc fermentum mattis. In eleifend vehicula justo, sed pulvinar erat scelerisque vel. Vestibulum eu erat elit. Etiam mattis feugiat finibus.</p>
            </div>
            <div class="client-item">
                <div class="profil">
                    <img src="{{ asset('images/client2.svg') }}" alt="" />
                    <div class="quote">
                        <h3>Luke Glover</h3>
                        <img src="{{ asset('images/etoile.svg') }}" alt="" />
                    </div>
                </div>
                <p>Phasellus fermentum orci non nunc fermentum mattis. In eleifend vehicula justo, sed pulvinar erat scelerisque vel. Vestibulum eu erat elit. Etiam mattis feugiat finibus.</p>
            </div>
            <div class="client-item">
                <div class="profil">
                    <img src="{{ asset('images/client3.svg') }}" alt="" />
                    <div class="quote">
                        <h3>Roderick Schumm</h3>
                        <img src="{{ asset('images/etoile.svg') }}" alt="" />
                    </div>
                </div>
                <p>Phasellus fermentum orci non nunc fermentum mattis. In eleifend vehicula justo, sed pulvinar erat scelerisque vel. Vestibulum eu erat elit. Etiam mattis feugiat finibus.</p>
            </div>
            <div class="client-item">
                <div class="profil">
                    <img src="{{ asset('images/client4.svg') }}" alt="" />
                    <div class="quote">
                        <h3>Brandi Boyle</h3>
                        <img src="{{ asset('images/etoile.svg') }}" alt="" />
                    </div>
                </div>
                <p>Phasellus fermentum orci non nunc fermentum mattis. In eleifend vehicula justo, sed pulvinar erat scelerisque vel. Vestibulum eu erat elit. Etiam mattis feugiat finibus.</p>
            </div>
            <div class="client-item">
                <div class="profil">
                    <img src="{{ asset('images/client5.svg') }}" alt="" />
                    <div class="quote">
                        <h3>Scott Runolfsdottir</h3>
                        <img src="{{ asset('images/etoile.svg') }}" alt="" />
                    </div>
                </div>
                <p>Phasellus fermentum orci non nunc fermentum mattis. In eleifend vehicula justo, sed pulvinar erat scelerisque vel. Vestibulum eu erat elit. Etiam mattis feugiat finibus.</p>
            </div>
            <div class="client-item">
                <div class="profil">
                    <img src="{{ asset('images/client6.svg') }}" alt="" />
                    <div class="quote">
                        <h3>Claire Witting</h3>
                        <img src="{{ asset('images/etoile.svg') }}" alt="" />
                    </div>
                </div>
                <p>Phasellus fermentum orci non nunc fermentum mattis. In eleifend vehicula justo, sed pulvinar erat scelerisque vel. Vestibulum eu erat elit. Etiam mattis feugiat finibus.</p>
            </div>
        </div>
    </div>
    <div class="contact">
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
    <div class="form-contact">
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
</main>



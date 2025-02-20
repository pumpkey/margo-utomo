<?php include 'includes/header.php'; ?>

<main>
    <section id="tours-hero">
        <div class="tours-hero-container">
            <img src="assets/images/tour-hero.jpg" alt="tours">
            <div class="overlay"></div>
            <div class="tours-hero-text">
                <h1>The Beauty of East Java</h1>
            </div>
        </div>
    </section>

    <section id="tours-description" class="tours-description">
        <div class="tours-description-container">            
            <p id="short-description"><b>Banyuwangi</b> is the most eastern regency of East Java. Jember is the closest neighbour on the west side whilst Bali is only apart by the Bali Strait. The native people of Banyuwangi are the Osing. They have their own community and speak in their own dialect, a combination language between Javanese and Balinese.</p>

            <p>The diverse natural scenery, art, culture, customs and traditions have created Banyuwangi as a unique destination worth to be visited. The beauty of nature is spread across the Banyuwangi district from west to the east. The mountains, forests and beaches create such outstanding attractions like the Ijen Crater, the Meru Betiri National Park and Sukamade.</p>
            
            <div id="full-description" style="display: none;">
                <p>Typical Handicrafts and traditional food are found plentiful in East Java. Batik Tulis which has its own characteristic in comparison with batiks from Central Java is a trademark famous for East Java. Gandrung dance is the well-known welcome dance performed only in Banyuwangi.</p>
                
                <p><b>Kalibaru</b> is a typical mid-size hill-country city. It is formed of 5 smaller villages. It is located on one of the busiest transit roads in Indonesia connecting Banyuwangi to Jember, Surabaya, Malang and Yogyakarta. Even though the road has been improved greatly, some stretches are still very narrow slowing down the traffic as overtaking the many heavy trucks is often not possible due to the oncoming traffic.</p>
                
                <p>A sizeable part of Kalibaru city is located along this main trunk road covering 7 km from the entrance to the exit. Kalibaru has a railway station connecting Kalibaru to Banyuwangi and to Surabaya. About 60,000 persons live in Kalibaru. Kalibaru is in the plantation belt with many big-size plantations. Being on 420 meters above sea level, the climate in Kalibaru is cooler than in the low lying areas like Banyuwangi, Jember, Surabaya and Malang. In the evening and during the night it can become quite cool at times.</p>
                
                <p>Bali and its Ngurah Rai International Airport are about 220 km away from Kalibaru which can be reached in about 6-7 hours, crossing the Bali Straits in ferries plying this route 24 hours.</p>
                
                <p>From the west side, the closest large international airport is Juanda Airport in Surabaya. It can be reached by either car, train or by plane from Blimbingsari Airport in Banyuwangi. The overland journey takes about 5 hours and passes through constantly changing scenes of life in a tropical paradise, busy towns, sleepy rural villages, terraced rice fields, plantations, orchards, forests and happy people with their warm smiles.</p>
                
                <p>The road journey winds over the forested Merawan range whilst the train passes under it through a historic tunnel which was built between 1902 and 1920 during the Dutch administration.</p>
            </div>
            
            <button id="toggle-description" onclick="toggleDescription()">Show More</button>
        </div>
    </section>

    <section id="hill-rooms" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out">
        <div class="tours-container">
            <h2 data-aos="fade-up" data-aos-duration="1000"><span class="underline">Tours</span></h2>
            <div class="swiper facility-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rooms-wrapper">
                            <div class="room-card" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="100">
                                <img src="assets/images/tour-sukamade.jpg" alt="Superior Twin" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                                <h3 style="margin-bottom: 10px;">Sukamade Tour - Meru Betiri National Park</h3>        
                                
                                <ul style="padding-left: 20px; margin-bottom: 15px;">
                                    <li><b>Location: </b>South-west of Kalibaru</li>
                                    <li><b>Distance: </b>108 km</li>
                                    <li><b>Duration: </b>2 days and 1 night</li>
                                    <li><b>Schedule: </b>09:00 am</li>
                                </ul>
                                
                                <div id="more-sukamade" style="display: none;">
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        Witness one of the greatest natural events of surviving pre-historic turtles as a great and unforgettable vacation experience. The principal object of this adventure tour is watching the turtles laying their eggs on a virgin secluded beach which is well-known as Sukamade Beach. Before searching for the turtles you will pass through tropical low-land rain forest on the southern coast of Java. The peak season for green turtles (mostly found laying their eggs on Sukamade Beach) is on during the wet season but usually reduced activity can be observed during the entire year.                                     
                                    </p>

                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        <b>Please note</b> that there is no guarantee we will observe the sea turtle laying their eggs during this trip.
                                    </p>

                                    <h4 style="margin-bottom: 5px;">Inclusions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px; text-align: center;">
                                        <li>English-speaking Tour Guide</li>
                                        <li>Accommodation</li>
                                        <li>Meals</li>
                                        <li>Admission fee</li>
                                        <li>Mineral water during tour</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Conditions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px; text-align: center;">
                                        <li>Additional Tour Guide / Leader joining the guest will be charged at Rp. 400.000 nett (1 person only with no additional car)</li>
                                        <li>Additional charge if drop straight to Ketapang at Rp. 550.000 nett/car</li>
                                        <li>Sunday/Public Holidays, there will be additional charge of Rp. 75.000/person</li>
                                        <li>Each car will be seated with maximum 6 guests</li>
                                        <li>Management has rights to cancel this tour at anytime if weather not permitted</li>
                                    </ul>
                                </div>
                                
                                <p style="text-align: center; cursor: pointer; color: #978459; text-decoration: underline;" id="toggle-sukamade">
                                    Show More
                                </p>

                                <div class="btn-wrapper">
                                    <button class="book-room" data-room="Superior">Book a Tour</button>
                                </div>
                            </div>
              
                            <div class="room-card" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="300">
                                <img src="assets/images/tour-alaspurwo.jpg" style="height: 240px;" alt="Superior Double" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="1000">
                                <h3 style="margin-bottom: 10px;">Alas Purwo Tour - The Jungle</h3>        

                                <ul style="padding-left: 20px; margin-bottom: 15px;">
                                    <li><b>Location: </b>South-east of Kalibaru</li>
                                    <li><b>Distance: </b>83 km</li>
                                    <li><b>Duration: </b>1 day</li>
                                    <li><b>Schedule: </b>09:00 am</li>
                                </ul>                                                                
                                
                                <div id="more-alaspurwo" style="display: none;">
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        The tour to the Alas Purwo National Park is an outstanding experience to observe the pristine 
                                        tropical low-land rainforest and the mangrove forests on the other side of the National Park. 
                                        Alas Purwo which means “the first forest” is one of the best preserved rain forests which is 
                                        protected by myths and law. The local people believe that it is a sacred forest. 
                                    </p>
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        There are several other attractions to visit such as Ngagelan Beach (the turtle sanctuary), 
                                        Pura Giri Salaka (an old Hindu temple), Sadengan (the observation tower), and Trianggulasi Beach.
                                    </p>

                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        There will be unforgettable moments to discover Banteng/Javanese bulls (Bos javanicus), 
                                        Green Pea Fowls (Pavo muticus), and Indian Deer (Muntiacus muntjak) in the wild. 
                                        During the dry season, most animals will go to the waterhole in savannah Sadengan. 
                                        An additional trip to one of the biggest mangrove forests can be arranged on Bedul Estuary 
                                        or Segara Anakan. It takes one hour by typical traditional fisher boat (katir) which is 
                                        really a wonderful experience.
                                    </p>

                                    <h4 style="margin-bottom: 5px;">Inclusions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px; text-align: center;">
                                        <li>Transportation with 4WD Land Rover Jeep</li>
                                        <li>Certified English-speaking Tour Guide from Margo Utomo</li>
                                        <li>Entrance fee / admission fee</li>
                                        <li>1 lunch box, 1 coffee break – animal watch</li>
                                        <li>Camera charge – mineral water during tours</li>
                                        <li>Refreshment cold towel</li>
                                        <li>First aid / standard medicines on stand by</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Conditions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px; text-align: center;">
                                        <li>Additional Tour Guide / Leader joining the guest will be charged at Rp. 375.000 nett (1 person only – with no additional car)</li>
                                        <li>Additional charge if drop straight to Ketapang at Rp. 400.000 nett / car</li>
                                        <li>Each car will be seated with maximum 5 guests</li>
                                        <li>If you wish to combine this tour with MANGROVE VISIT, additional charge of Rp. 800.000 nett / boat for maximum capacity of 5 persons</li>
                                    </ul>
                                </div>
                                
                                <p style="text-align: center; cursor: pointer; color: #978459; text-decoration: underline;" id="toggle-alaspurwo">
                                    Show More
                                </p>

                                <div class="btn-wrapper">
                                    <button class="book-room" data-room="Superior">Book a Tour</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rooms-wrapper">
                            <div class="room-card" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="100">
                                <img src="assets/images/tour-kalibaru.jpg" alt="Village Tour by Jeep" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                                <h3 style="margin-bottom: 10px;">Village Tour by Jeep – The Kalibaru Village</h3>        
                                                                
                                <ul style="padding-left: 20px; margin-bottom: 15px;">
                                    <li><b>Location: </b>Kalibaru’s surrounding village</li>
                                    <li><b>Distance: </b>10 km</li>
                                    <li><b>Duration: </b>3 hours</li>
                                    <li><b>Schedule: </b>09:00 am</li>
                                </ul>                                                                
                                
                                <div id="more-kalibaru" style="display: none;">
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        The Village Tour by Jeep will show you the lifestyle and conditions of typical villagers, 
                                        especially related to the plantations as Kalibaru is known for its agricultural heritage. 
                                        Some local tourist destinations like the waterfall Wono Rejo and the natural reservoir Sumber Salak 
                                        are included in your itinerary.
                                    </p>    
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        The waterfall Wono Rejo, also known as Tirto Kemanten, and Sumber Salak, which was long ago used as a swimming pool 
                                        for the plantation general managers, are among the places of interest. You may also visit the Cocoa Factory 
                                        in Afd. Sumber Baru to see how they process cocoa wet beans into dried cocoa beans, an essential step in determining 
                                        the quality of cocoa powder or chocolate bars.
                                    </p>

                                    <h4 style="margin-bottom: 5px;">Preparation</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px;">
                                        <li>Camera</li>
                                        <li>Sport shoes</li>
                                        <li>Casual dress</li>
                                        <li>Mosquito repellent lotion</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Inclusions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px; text-align: center;">
                                        <li>Transportation with 4WD Land Rover Jeep</li>
                                        <li>Certified English-speaking Tour Guide from Margo Utomo</li>
                                        <li>Entrance fee / admission fee to plantation area</li>
                                        <li>1 coffee break – mineral water during tour</li>
                                        <li>First aid / standard medicines on stand by</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Conditions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px; text-align: center;">
                                        <li>No additional charge for Tour Guide / Leader joining the guest (1 person) with no additional car</li>
                                        <li>Each car will be seated with maximum 6 guests</li>
                                    </ul>
                                </div>
                                
                                <p style="text-align: center; cursor: pointer; color: #978459; text-decoration: underline;" id="toggle-kalibaru">
                                    Show More
                                </p>

                                <div class="btn-wrapper">
                                    <button class="book-room" data-room="Village Tour">Book a Tour</button>
                                </div>
                            </div>

                            <div class="room-card" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="100">
                                <img src="assets/images/tour-amargo.jpg" alt="Amargo Tour – The Plantations" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                                <h3 style="margin-bottom: 10px;">Amargo Tour – The Plantations</h3>        
                                
                                <ul style="padding-left: 20px; margin-bottom: 15px;">
                                    <li><b>Location: </b>North-east of Kalibaru</li>
                                    <li><b>Distance: </b>11 km</li>
                                    <li><b>Duration: </b>4 hours</li>
                                    <li><b>Schedule: </b>08:00 am</li>
                                </ul>                                                                
                                
                                <div id="more-amargo" style="display: none;">
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        An enjoyable, interesting, and educational excursion to one of the plantations established in the early 1900s. 
                                        This tour provides knowledge about rubber, coffee, cocoa, and clove processing. You'll also see home industries 
                                        like tin smiths and seasonal farming crops.
                                    </p>
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        The rubber processing can be observed year-round, except on rainy days. The coffee season is from June to September, 
                                        while the cocoa season is in May and October. Depending on the season, you might visit villages growing chili peppers, 
                                        melons, peanuts, and more.
                                    </p>

                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        <b>Please note:</b> Factories are closed on Sundays and public holidays.
                                    </p>

                                    <h4 style="margin-bottom: 5px;">Preparation</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px;">
                                        <li>Camera</li>
                                        <li>Sport shoes</li>
                                        <li>Casual dress</li>
                                        <li>Mosquito repellent lotion</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Inclusions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px; text-align: center;">
                                        <li>Transportation with Innova</li>
                                        <li>Certified English-speaking Tour Guide from Margo Utomo</li>
                                        <li>Entrance fee / admission fee</li>
                                        <li>1 coffee break – mineral water during tour</li>
                                        <li>First aid / standard medicines on stand by</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Conditions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px; text-align: center;">
                                        <li>Additional Tour Guide / Leader joining the guest will be charged at Rp. 50.000 nett (1 person only with no additional car)</li>
                                        <li>Each car will be seated with maximum 6 guests</li>
                                    </ul>
                                </div>
                                
                                <p style="text-align: center; cursor: pointer; color: #978459; text-decoration: underline;" id="toggle-amargo">
                                    Show More
                                </p>

                                <div class="btn-wrapper">
                                    <button class="book-room" data-room="Amargo Tour">Book a Tour</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rooms-wrapper">
                            <div class="room-card" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="100">
                                <img src="assets/images/tour-aroma.jpg" alt="Aroma Tour – The Spice Gardens" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                                <h3 style="margin-bottom: 10px;">Aroma Tour – The Spice Gardens</h3>        
                                
                                <ul style="padding-left: 20px; margin-bottom: 15px;">
                                    <li><b>Location: </b>Margo Utomo Plantation</li>
                                    <li><b>Duration: </b>1-2 hours</li>
                                    <li><b>Schedule: </b>Morning or afternoon</li>
                                </ul>                                                                
                                
                                <div id="more-aroma" style="display: none;">
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        A fascinating tour through Margo Utomo’s plantation, where you'll learn about vanilla, coffee, coconut, cinnamon, nutmeg, 
                                        and many more tropical crops. You'll also see a dairy farm with around 80 cows, milked by hand every morning and evening.
                                    </p>
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        The tour also includes brown-sugar processing from coconut sap in the afternoon and a beautiful butterfly aviary. 
                                        This educational and enriching experience is perfect for deepening your understanding of tropical plants and their products.
                                    </p>

                                    <h4 style="margin-bottom: 5px;">Preparation</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px;">
                                        <li>Camera</li>
                                        <li>Sport shoes</li>
                                        <li>Casual dress</li>
                                        <li>Mosquito repellent lotion</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">*Educational Tours</h4>
                                    <p style="margin-bottom: 15px; text-align: justify;">
                                        Special educational tours are available for students from Kindergarten to Elementary School, arranged by schools, teachers, 
                                        or private groups. It’s a fun and interactive way for the younger generation to learn about plants growing around them.
                                    </p>
                                </div>
                                
                                <p style="text-align: center; cursor: pointer; color: #978459; text-decoration: underline;" id="toggle-aroma">
                                    Show More
                                </p>

                                <div class="btn-wrapper">
                                    <button class="book-room" data-room="Aroma Tour">Book a Tour</button>
                                </div>
                            </div>

                            <div class="room-card" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="100">
                                <img src="assets/images/tour-ijen.webp" style="height: 245px;" alt="Ijen Crater Tour – The Blue Flame" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                                <h3 style="margin-bottom: 10px;">Ijen Crater Tour – The Blue Flame</h3>        
                                
                                <ul style="padding-left: 20px; margin-bottom: 15px;">
                                    <li><b>Location: </b>North-east of Kalibaru</li>
                                    <li><b>Distance: </b>87 km</li>
                                    <li><b>Duration: </b>6-8 hours</li>
                                    <li><b>Schedule: </b>03:00 am</li>
                                </ul>                                                                
                                
                                <div id="more-ijen" style="display: none;">
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        The Ijen Crater Tour offers breathtaking views of a volcanic landscape and the famous blue flame phenomenon. 
                                        You will also witness the challenging work of sulphur miners carrying loads of 80-100 kg from deep in the crater.
                                    </p>
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        This tour is physically demanding and recommended for fit participants only. Note that walking down to the Crater Lake, also known as Hell’s Kitchen, is strictly prohibited for safety reasons.
                                    </p>

                                    <h4 style="margin-bottom: 5px;">Preparation</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px;">
                                        <li>Camera</li>
                                        <li>Sport shoes</li>
                                        <li>Casual dress</li>
                                        <li>Mask</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Inclusions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px;">
                                        <li>Transportation with 4WD Land Rover Jeep</li>
                                        <li>Certified English-speaking Tour Guide from Margo Utomo</li>
                                        <li>Entrance Fee / Admission Fee</li>
                                        <li>1 breakfast box, 1 coffee break</li>
                                        <li>Mineral water during tour</li>
                                        <li>Refreshment cold towel – first aid / standard medicines on standby</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Conditions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px;">
                                        <li>Additional Tour Guide available for Rp. 200.000 nett (1 person, no extra car)</li>
                                        <li>Additional charge for drop-off to Ketapang at Rp. 400.000 nett / car</li>
                                        <li>Each car accommodates max 4 guests + 1 guide</li>
                                        <li>Tour may be canceled due to weather or force majeure</li>
                                    </ul>
                                </div>
                                
                                <p style="text-align: center; cursor: pointer; color: #978459; text-decoration: underline;" id="toggle-ijen">
                                    Show More
                                </p>

                                <div class="btn-wrapper">
                                    <button class="book-room" data-room="Ijen Crater Tour">Book a Tour</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rooms-wrapper">
                            <div class="room-card" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="100">
                                <img src="assets/images/tour-baluran.jpg" alt="Baluran National Park Tour – Bama Beach & Savana Bekol" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                                <h3 style="margin-bottom: 10px;">Baluran National Park Tour – Bama Beach & Savana Bekol</h3>        
                                
                                <ul style="padding-left: 20px; margin-bottom: 15px;">
                                    <li><b>Location: </b>North East of Banyuwangi</li>
                                    <li><b>Distance: </b>100 km</li>
                                    <li><b>Duration: </b>2 days and 1 night</li>
                                    <li><b>Schedule: </b>09:00 am</li>
                                </ul>                                                            
                                
                                <div id="more-baluran" style="display: none;">
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        Experience Baluran National Park, known as "Africa van Java," with its vast Savana Bekol and scenic Bama Beach.
                                        This conservation area offers a stunning landscape and diverse wildlife.
                                    </p>
                                    <p style="text-align: justify; margin-bottom: 15px;">
                                        Explore multiple destinations within the park, including Japan Cave, Manting, Kajang, Balanan, Lempuyang, and many more.
                                        The tour allows you to experience the underwater beauty of Bama Beach and the wildlife-rich savanna.
                                    </p>

                                    <h4 style="margin-bottom: 5px;">Price Lists</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px;">
                                        <li>1 person Rp. 3.036.000</li>
                                        <li>2 persons Rp. 3.312.000</li>
                                        <li>3 persons Rp. 3.381.000</li>
                                        <li>4 persons Rp. 3.737.000</li>
                                        <li>5 persons Rp. 4.082.000</li>
                                        <li>6 persons Rp. 4.427.000</li>
                                    </ul>

                                    <h4 style="margin-bottom: 5px;">Inclusions</h4>
                                    <ul style="padding-left: 20px; margin-bottom: 15px;">
                                        <li>Transport Land Rover Jeep</li>
                                        <li>Certified English-speaking Tour Guide</li>
                                        <li>Lunch box and mineral water</li>
                                        <li>Admission fee</li>
                                    </ul>
                                </div>
                                
                                <p style="text-align: center; cursor: pointer; color: #978459; text-decoration: underline;" id="toggle-baluran">
                                    Show More
                                </p>

                                <div class="btn-wrapper">
                                    <button class="book-room" data-room="Baluran National Park Tour">Book a Tour</button>
                                </div>
                            </div>

                        </div>
                    </div>  
                </div>
                    <div class="swiper-button-prev" style="color: #014851;"></div>
                    <div class="swiper-button-next" style="color: #014851;"></div>
                </div>
            </div>                              
        </div>
    </section>

    <section id="gallery" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out">
        <div class="gallery-container">
            <h2 data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                <span class="underline">Gallery</span>
            </h2>
            <div class="gallery-wrapper" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1200">
                <div class="gallery-slider">
                    <div class="gallery-row" data-aos="fade-up" data-aos-delay="600">
                        <img src="assets/images/tour-amargo.jpg" alt="Gallery 1">
                        <img src="assets/images/tour2.jpg" alt="Gallery 2">
                        <img src="assets/images/tour-alaspurwo.jpg" alt="Gallery 3">
                        <img src="assets/images/tour-baluran.jpg" alt="Gallery 4">
                    </div>
                    <div class="gallery-row" data-aos="fade-up" data-aos-delay="800">                        
                        <img src="assets/images/tour1.png" alt="Gallery 1">
                        <img src="assets/images/tour-sukamade.jpg" alt="Gallery 2">
                        <img src="assets/images/tour-kalibaru.jpg" alt="Gallery 3">
                        <img src="assets/images/tour-aroma.jpg" alt="Gallery 4">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
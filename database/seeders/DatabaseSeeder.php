<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Keyboard;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name' => 'Manager'],
            ['name' => 'Customer'],
        ]);

        User::insert([
            ['role_id' => 1, 
            'username' => 'manager', 
            'email_address' => 'manager@keypedia.com', 
            'password' => bcrypt('manager'), 
            'address' => 'Keypedia South Street 1', 
            'gender' => 'Female', 
            'birth_date' => '1988-01-01'],

            ['role_id' => 2, 
            'username' => 'budisentosa', 
            'email_address' => 'budisentosa@gmail.com', 
            'password' => bcrypt('budisentosa'), 
            'address' => 'Downtown Lane 21', 
            'gender' => 'Male', 
            'birth_date' => '1990-02-02'],

            ['role_id' => 2, 
            'username' => 'sarahfariha', 
            'email_address' => 'sarahfariha@gmail.com', 
            'password' => bcrypt('sarahfariha'), 
            'address' => 'Victoria 3rd Avenue', 
            'gender' => 'Female', 
            'birth_date' => '1992-03-03'],

            ['role_id' => 2, 
            'username' => 'ekosebastian', 
            'email_address' => 'ekosebastian@gmail.com', 
            'password' => bcrypt('ekosebastian'), 
            'address' => 'Rundown St. North 90A', 
            'gender' => 'Male', 
            'birth_date' => '1994-04-04'],

            ['role_id' => 2, 
            'username' => 'jayahartono', 
            'email_address' => 'jayahartono@gmail.com', 
            'password' => bcrypt('jayahartono'), 
            'address' => 'Memory Lane 11th Borough', 
            'gender' => 'Male', 
            'birth_date' => '1996-05-05'],
        ]);

        Category::insert([
            ['name' => 'Corsair', 'image' => 'Corsair.jpg'],
            ['name' => 'Razer', 'image' => 'Razer.jpg'],
            ['name' => 'G.Skill', 'image' => 'Gskill.jpg'],
            ['name' => 'Logitech', 'image' => 'Logitech.jpg'],
            ['name' => 'HyperX', 'image' => 'HyperX.jpg'],
            ['name' => 'Roccat', 'image' => 'Roccat.jpg'],
            ['name' => 'Ducky', 'image' => 'Ducky.jpg'],
        ]);

        Keyboard::insert([
            // (1/7) 10 Corsair
            ['category_id' => '1', 
            'name' => 'K65 RGB MINI 60%', 
            'price' => 65, 
            'description' => 'The CORSAIR K65 RGB MINI 60% Mechanical Gaming Keyboard combines top-level performance with portability, featuring AXON hyper-processing technology, CHERRY MX Red mechanical keyswitches, and exceptional customizability in a compact design.', 
            'image' => 'K65 RGB MINI 60%.jpg'],

            ['category_id' => '1', 
            'name' => 'K100 RGB Optical', 
            'price' => 70, 
            'description' => 'The incomparable CORSAIR K100 RGB Optical-Mechanical Gaming Keyboard combines stunning gold-anodized dual-tone aluminum design, per-key RGB lighting with powerful CORSAIR AXON Hyper-Processing Technology, and CORSAIR OPX RGB keyswitches.', 
            'image' => 'K100 RGB Optical.jpg'],
            
            ['category_id' => '1', 
            'name' => 'STRAFE RGB MK.2', 
            'price' => 75, 
            'description' => 'The next-generation CORSAIR STRAFE RGB MK.2 mechanical keyboard features CHERRY® MX RGB keyswitches and 8MB onboard profile storage to take your gaming profiles with you.', 
            'image' => 'STRAFE RGB MK.2.jpg'],

            ['category_id' => '1', 
            'name' => 'K70 RGB MK.2', 
            'price' => 80, 
            'description' => 'The CORSAIR K70 RGB MK.2 is a premium mechanical gaming keyboard built to last, with an aluminum frame, CHERRY® MX keyswitches and stunning per-key RGB dynamic backlighting.', 
            'image' => 'K70 RGB MK.2.jpg'],

            ['category_id' => '1', 
            'name' => 'K95 RGB PLATINUM XT', 
            'price' => 85, 
            'description' => 'The CORSAIR K95 RGB PLATINUM XT Mechanical Gaming Keyboard immerses your desktop in dynamic per-key RGB backlighting, equipped with a double-shot PBT keycap set and six dedicated macro keys with Elgato Stream Deck software integration.', 
            'image' => 'K95 RGB PLATINUM XT.jpg'],

            ['category_id' => '1', 
            'name' => 'K63 Wireless', 
            'price' => 90, 
            'description' => 'Experience ultimate gaming freedom with the CORSAIR K63 Wireless Mechanical Gaming Keyboard, featuring ultra-fast 1ms 2.4GHz wireless technology with CHERRY® MX mechanical keyswitches packed into a portable, tenkeyless design.', 
            'image' => 'K63 Wireless.jpg'],

            ['category_id' => '1', 
            'name' => 'K57 RGB Wireless', 
            'price' => 95, 
            'description' => 'Light up your wireless gaming with the K57 RGB Wireless Gaming Keyboard, featuring sub-1ms SLIPSTREAM WIRELESS and brilliant per-key RGB backlighting from CAPELLIX LEDs.', 
            'image' => 'K57 RGB Wireless.jpg'],

            ['category_id' => '1', 
            'name' => 'K83 Wireless Entertainment', 
            'price' => 100, 
            'description' => 'The K83 Wireless Entertainment Keyboard offers the latest in living room media control. Aluminum design, white backlighting, and flexible wireless technology give you a front row seat to your living room entertainment.', 
            'image' => 'K83 Wireless Entertainment.jpg'],

            ['category_id' => '1', 
            'name' => 'K55 RGB PRO XT', 
            'price' => 105, 
            'description' => 'The CORSAIR K55 RGB PRO XT Gaming Keyboard lights up your desktop with dynamic per-key RGB backlighting and powers up your gameplay with six dedicated macro keys.', 
            'image' => 'K55 RGB PRO XT.jpg'],

            ['category_id' => '1', 
            'name' => 'K66 MX Red', 
            'price' => 110, 
            'description' => 'The CORSAIR K66 mechanical keyboard features 100% CHERRY MX Red keyswitches, dedicated volume and multimedia controls and 100% anti-ghosting with full key rollover to enable a high performance gaming experience.', 
            'image' => 'K66 MX Red.jpg'],

            // (2/7) 10 Razer
            ['category_id' => '2', 
            'name' => 'BlackWidow V3 Pro', 
            'price' => 230, 
            'description' => 'Amp up the aesthetics of your new Razer keyboard with a bundle that includes 2 different keycap sets—available in a range of colors to suit your style.', 
            'image' => 'BlackWidow V3 Pro.jpg'],

            ['category_id' => '2', 
            'name' => 'BlackWidow V3 TKL', 
            'price' => 210, 
            'description' => 'Mean performance in a leaner form—enter the Razer BlackWidow V3 Tenkeyless. Continuing an iconic legacy, this compact gaming keyboard is armed with our world-renowned Razer™ Mechanical Switches and powered by Razer Chroma™ RGB, for a level of precision and personalization beloved by gamers worldwide.', 
            'image' => 'BlackWidow V3 TKL.jpg'],

            ['category_id' => '2', 
            'name' => 'BlackWidow Chroma', 
            'price' => 225, 
            'description' => 'Designed specifically for gaming, the Razer Mechanical Switch actuates at an optimal distance, giving you speed and responsiveness like never before. The Razer Mechanical Switch has been lauded as the new standard for all mechanical gaming keyboards since its introduction.', 
            'image' => 'BlackWidow Chroma.jpg'],

            ['category_id' => '2', 
            'name' => 'Huntsman Mini', 
            'price' => 190, 
            'description' => 'Enter a new dimension of deadly with the Razer Huntsman Mini—a 60% gaming keyboard with cutting-edge Razer Optical Switches. Highly portable and ideal for streamlined setups, its time to experience lightning-fast actuation in our most compact form factor yet.', 
            'image' => 'Huntsman Mini.jpg'],

            ['category_id' => '2', 
            'name' => 'Huntsman Elite', 
            'price' => 180, 
            'description' => 'Meet the Razer Huntsman Elite: the product of years of research and innovation—now taken to new heights. By redefining the boundaries of precision and speed, you are about to experience performance that can only be described as ahead of its time. The next stage of keyboard evolution is here.', 
            'image' => 'Huntsman Elite.jpg'],

            ['category_id' => '2', 
            'name' => 'Huntsman Tournament Edition', 
            'price' => 180, 
            'description' => 'When a split second can mean the difference between victory and defeat, the absolute speed of the Razer Huntsman Tournament Edition is what separates the champions from everyone else. Designed and tested by Team Razer athletes, this gaming keyboard is armed with the fastest Razer switches we have ever designed, to give you the edge you need to thrive where the competition is fiercest.', 
            'image' => 'Huntsman Tournament Edition.jpg'],

            ['category_id' => '2', 
            'name' => 'Cynosa V2', 
            'price' => 60, 
            'description' => 'Paint your play in a truly immersive light with the Razer Cynosa V2—the essential RGB gaming keyboard. With customizable lighting in every key, watch it come alive as you game on Chroma-integrated titles, and embrace a gaming experience you will not ever want to turn away from.', 
            'image' => 'Cynosa V2.jpg'],

            ['category_id' => '2', 
            'name' => 'Cynosa Lite', 
            'price' => 70, 
            'description' => 'The Razer Cynosa Lite Keyboard gives your gaming rig an unmistakable look. Watch it come to life with individually customisable key lighting. It also features anti-ghosting for up to 10 simultaneous key presses and fully programmable keys with on-the-fly macro recording.', 
            'image' => 'Cynosa Lite.jpg'],

            ['category_id' => '2', 
            'name' => 'Ornata Chroma', 
            'price' => 80, 
            'description' => 'Get the best of both worlds. Combining a soft touch with a crisp tactile click, the Razer Ornata Chroma presents a mecha-membrane typing experience that is swift and exact. Plus, its incredibly comfortable to use.', 
            'image' => 'Ornata Chroma.jpg'],

            ['category_id' => '2', 
            'name' => 'Ornata V2', 
            'price' => 100, 
            'description' => 'Experience the best of both worlds with the Razer Ornata V2—featuring a hybrid switch that merges the benefits of membrane keys and mechanical switches into one singular design.', 
            'image' => 'Ornata V2.jpg'],

            // (3/7) 7 G.Skill
            ['category_id' => '3', 
            'name' => 'KM560 MX', 
            'price' => 30, 
            'description' => 'RIPJAWS KM560 MX is a compact tenkeyless mechanical gaming keyboard built with durable Cherry MX keyswitches and packed with advanced features, such as on-the-fly macro recording, multimedia playback, and volume control via function combo hotkeys. Along with onboard memory to store all its settings and eliminating the need for additional software, this makes the KM560 MX tenkeyless keyboard a versatile and compact mechanical keyboard for everyday gaming and typing, while giving you extra desk space for your mouse and everything else.', 
            'image' => 'KM560 MX.jpg'],

            ['category_id' => '3', 
            'name' => 'KM570 MX', 
            'price' => 40, 
            'description' => 'RIPJAWS KM570 MX returns to the humble roots of mechanical keyboards with a simplistic design meant for enduring functionality, all while packed with major key gaming and media entertainment features, and storing the settings for a complete profile onto the onboard storage.', 
            'image' => 'KM570 MX.jpg'],

            ['category_id' => '3', 
            'name' => 'KM570 RGB', 
            'price' => 50, 
            'description' => 'RIPJAWS KM570 RGB, now with the all new RGB key lights, returns to the humble roots of mechanical keyboards with a simplistic design meant for enduring functionality, all while packed with major key gaming and media entertainment features, and storing the settings for a complete profile onto the onboard storage.', 
            'image' => 'KM570 RGB.jpg'],

            ['category_id' => '3', 
            'name' => 'KM780 RGB', 
            'price' => 60, 
            'description' => 'RIPJAWS KM780 series mechanical gaming keyboard, now with the all new RGB key lights is designed and built for the ultimate typing and gaming experience. Built with durable Cherry MX keyswitches (beyond 50 million keypresses!) and a military-grade brushed aluminum top-plate, the KM780 series keyboard provides quick adaptation to any situation. Featuring onboard memory that stores 3 complete profiles - your settings go wherever you go.', 
            'image' => 'KM780 RGB.jpg'],

            ['category_id' => '3', 
            'name' => 'KM780 MX', 
            'price' => 70, 
            'description' => 'RIPJAWS KM780 series mechanical gaming keyboard is designed and built for the ultimate typing and gaming experience. Built with durable Cherry MX keyswitches (beyond 50 million keypresses!) and a military-grade brushed aluminum top-plate, the KM780 series keyboard provides quick adaptation to any situation. Featuring onboard memory that stores 3 complete profiles - your settings go wherever you go.', 
            'image' => 'KM780 MX.jpg'],

            ['category_id' => '3', 
            'name' => 'KM360 Black', 
            'price' => 70, 
            'description' => 'An all black keyboard featuring long-lasting Cherry MX mechanical keyswitches, wear-proof ABS double injection keycaps, and a solid aluminum top-plate, the KM360 mechanical keyboard is the perfect daily mechanical keyboard. With a detachable USB Type-C cable, its easy to replace a worn cable by simply swapping it out with another USB Type-C cable of your choice.', 
            'image' => 'KM360 Black.jpg'],

            ['category_id' => '3', 
            'name' => 'KM360 White', 
            'price' => 80, 
            'description' => 'An all white keyboard featuring long-lasting Cherry MX mechanical keyswitches, wear-proof ABS double injection keycaps, and a solid aluminum top-plate, the KM360 mechanical keyboard is the perfect daily mechanical keyboard. With a detachable USB Type-C cable, its easy to replace a worn cable by simply swapping it out with another USB Type-C cable of your choice.', 
            'image' => 'KM360 White.jpg'],

            // (4/7) 10 Logitech
            ['category_id' => '4', 
            'name' => 'G413 Backlit', 
            'price' => 70, 
            'description' => 'G413 was conceived, designed, and engineered to deliver advanced performance with just the right feature set. The slim, bladelike chassis is made of of a lightweight, high-strength 5052 aluminum alloy. Underneath, there is mouse and headset cable management, plus adjustable-height feet with rubber stabilizers, so you can find the angle that fits you just right.', 
            'image' => 'G413 Backlit.jpg'],

            ['category_id' => '4', 
            'name' => 'G PRO TKL', 
            'price' => 100, 
            'description' => 'The pros asked, we listened. With a compact design and pro-grade clicky switches, PRO is pro-tested, tournament-assured, and built to win. Advanced GX Clicky mechanical switches are engineered for performance, responsiveness, and durability, with an audible and tactile feedback bump.', 
            'image' => 'G PRO TKL.jpg'],

            ['category_id' => '4', 
            'name' => 'G915 TKL Lightspeed Wireless', 
            'price' => 180, 
            'description' => 'A breakthrough in design and engineering, now in black and white colorways. G915 TKL features LIGHTSPEED pro-grade wireless, advanced LIGHTSYNC RGB, and high-performance low-profile mechanical switches. Meticulously crafted from premium materials, the G915 TKL is a sophisticated design of unparalleled beauty, strength, and performance, now in an even more compact form factor. G915 TKL. Play the next dimension.', 
            'image' => 'G915 TKL Lightspeed Wireless.jpg'],

            ['category_id' => '4', 
            'name' => 'G PRO X TKL', 
            'price' => 130, 
            'description' => 'The tournament-proven PRO X design—now with swappable pro-grade GX switches. Meet the customizable mechanical gaming keyboard built for the worlds top esports athletes.', 
            'image' => 'G PRO X TKL.jpg'],

            ['category_id' => '4', 
            'name' => 'G815 Lightsync RGB', 
            'price' => 150, 
            'description' => 'Advanced gaming technologies in a sophisticated ultra-thin design. Fully customizable, equipped with LIGHTSYNC RGB and dedicated G-keys. Engineered for high-performance gameplay with low-profile GL mechanical switches in clicky, tactile, and linear variations. Experience G815 and play the next dimension.', 
            'image' => 'G815 Lightsync RGB.jpg'],

            ['category_id' => '4', 
            'name' => 'G513 Lightsync RGB', 
            'price' => 150, 
            'description' => 'G513 is a high-performance gaming keyboard featuring your choice of advanced GX mechanical switches. The detachable, memory-foam palmrest and premium aluminum-alloy construction make G513 full-featured and best-in-class.', 
            'image' => 'G513 Lightsync RGB.jpg'],

            ['category_id' => '4', 
            'name' => 'G512 Lightsync RGB', 
            'price' => 100, 
            'description' => 'G512 is a high-performance gaming keyboard featuring your choice of advanced GX mechanical switches. Advanced gaming technology and aluminum-alloy construction make G512 simple, durable and full-featured.', 
            'image' => 'G512 Lightsync RGB.jpg'],

            ['category_id' => '4', 
            'name' => 'G613 Wireless', 
            'price' => 80, 
            'description' => 'G613 is a next generation wireless keyboard designed for gamers who demand both the high performance capabilities of mechanical switches and the freedom of wireless gaming.', 
            'image' => 'G613 Wireless.jpg'],

            ['category_id' => '4', 
            'name' => 'G213 RGB', 
            'price' => 40, 
            'description' => 'The G213 gaming keyboard features Logitech G Mech-Dome keys that are specially tuned to deliver a superior tactile response and overall performance profile similar to a mechanical keyboard. Mech-Dome keys are full height, deliver a full 4mm travel distance, 50g actuation force, and a quiet sound operation.', 
            'image' => 'G213 RGB.jpg'],

            ['category_id' => '4', 
            'name' => 'G910 RGB', 
            'price' => 90, 
            'description' => 'The highest levels performance, engineering, and design. G910 is fully loaded with programmable G-keys, LIGHTSYNC RGB, Romer-G Tactile switches, integrated palm rest and more.', 
            'image' => 'G910 RGB.jpg'],

            // (5/7) 7 HyperX
            ['category_id' => '5', 
            'name' => 'Alloy Core RGB', 
            'price' => 40, 
            'description' => 'Featuring HyperXs signature radiant light bar and smooth, dynamic RGB lighting effects, the HyperX Alloy Core RGB™ is ideal for gamers looking to enhance their keyboards style and performance without breaking the bank. With six different lighting effects and three brightness levels, it balances both brilliance and budget. Crafted with a durable, reinforced plastic frame, the Alloy Core RGB was constructed for stability and reliability for gamers who want a keyboard that will last.', 
            'image' => 'Alloy Core RGB.jpg'],

            ['category_id' => '5', 
            'name' => 'Alloy FPS Pro', 
            'price' => 50, 
            'description' => 'The HyperX™ Alloy FPS Pro is for the FPS gamer who wants a reliable, accurate tenkeyless (TKL) keyboard to maximize their desktop space. This 87-key keyboard provides everything a pro player needs, but without the numpad. Alloy FPS Pro is available with reliable, responsive CHERRY® MX Blue or Red1 key switches, and its tough solid steel frame ensures you will have a stable platform during the most important parts of your games.', 
            'image' => 'Alloy FPS Pro.jpg'],

            ['category_id' => '5', 
            'name' => 'Alloy FPS RGB', 
            'price' => 60, 
            'description' => 'The HyperX Alloy FPS RGB™ is a great-looking, high-performance keyboard designed to make sure that both your skills and style are on full display. The exposed LEDs on the keyswitches amp up brightness of the RGB backlighting which can be customized with the easy-to-use HyperX NGenuity software to make your stream really stand out. The Alloy FPS RGB has a small footprint geared for space-constrained setups so you will get room to maneuver without having to ramp up your mouse sensitivity.', 
            'image' => 'Alloy FPS RGB.jpg'],

            ['category_id' => '5', 
            'name' => 'Alloy Origins 60', 
            'price' => 70, 
            'description' => 'The HyperX Alloy Origins™ 60 is a supremely portable 60% form factor keyboard that gives you more room for sweeping mouse movements. It features a durable, full aluminum body, and reliable HyperX switches balanced for speed and performance which are rated to withstand 80 million keypresses.', 
            'image' => 'Alloy Origins 60.jpg'],

            ['category_id' => '5', 
            'name' => 'Alloy Origins Core', 
            'price' => 80, 
            'description' => 'The HyperX Alloy Origins™ Core is an ultra-compact, sturdy tenkeyless keyboard featuring custom HyperX mechanical switches designed to give gamers the best blend of style, performance, and reliability. These key switches have exposed LEDs for stunning lighting with an actuation force and travel distance elegantly balanced for responsiveness and accuracy.', 
            'image' => 'Alloy Origins Core.jpg'],

            ['category_id' => '5', 
            'name' => 'Alloy Origins', 
            'price' => 90, 
            'description' => 'Alloy Origins is built with a full aluminum body so it stays rigid and stable when keystrokes are flying, and also features keyboard feet that let you choose from three different tilt levels. Its sleek, compact design frees up space for mouse movement, and it also features a detachable USB Type-C cable for supreme portability.', 
            'image' => 'Alloy Origins.jpg'],

            ['category_id' => '5', 
            'name' => 'Alloy Elite 2', 
            'price' => 100, 
            'description' => 'For gamers, streamers, and multi-taskers who need to have more control at their fingertips, the HyperX Alloy Elite™ 2 is the keyboard for you. With dedicated media keys and a large volume wheel, this fully-featured gaming keyboards ready for everything from video editing to watching movies.', 
            'image' => 'Alloy Elite 2.jpg'],

            // (6/7) 10 Roccat
            ['category_id' => '6', 
            'name' => 'Magma', 
            'price' => 45, 
            'description' => 'The ROCCAT® Magma™ Membrane RGB Gaming Keyboard is ideal for RGBA enthusiasts seeking a competitive gaming keyboard. Its top plate is fully illuminated in 16.8 million RGB colors and AIMO compatible, making it ready for stunning lighting showcases. Featuring silent membrane keys, ROCCAT Easy-Shift[+] technology, a detachable palm rest and a low maintenance design.', 
            'image' => 'Magma.jpg'],

            ['category_id' => '6', 
            'name' => 'Pyro RGB', 
            'price' => 100, 
            'description' => 'The ROCCAT® Pyro Mechanical Gaming Keyboard with RGB Lighting boasts mechanical switches with an optimized 2.0mm actuation point for responsive keystrokes. A reinforcing brushed aluminum top plate adds robustness, with switches tested to 50 million keystrokes. The Pyro also features ROCCAT Easy-Shift[+]® button duplicator technology and a detachable palm rest for customizable comfort.', 
            'image' => 'Pyro RGB.jpg'],

            ['category_id' => '6', 
            'name' => 'Vulcan Pro', 
            'price' => 200, 
            'description' => 'ROCCAT® is the first in the industry to engineer an optical switch with a mechanical feel. The Titan Switch Optical gives lightspeed actuation and incredible precision. It adds to a feature set including mixer-style audio controls, detachable palm rest, AIMO illumination and a reinforcing aluminum plate.', 
            'image' => 'Vulcan Pro.jpg'],

            ['category_id' => '6', 
            'name' => 'Vulcan TKL Pro', 
            'price' => 160, 
            'description' => 'The award-winning ROCCAT® Vulcan Mechanical Gaming Keyboard is re-imagined in a tenkeyless form factor and taken to another level with the introduction of ROCCATs Titan Switch Optical. The new switch is a marvel in optical engineering, actuating at the speed of light for an unprecedented new level of responsiveness.', 
            'image' => 'Vulcan TKL Pro.jpg'],

            ['category_id' => '6', 
            'name' => 'Vulcan TKL', 
            'price' => 130, 
            'description' => 'The ROCCAT® Vulcan TKL Compact Mechanical RGB Gaming Keyboard presents the award-winning Titan Switch Mechanical in the smaller form factor. With the industrys best mix of speed and responsiveness plus a full feature set, it offers all of the benefits of tenkeyless gaming with none of the drawbacks.', 
            'image' => 'Vulcan TKL.jpg'],

            ['category_id' => '6', 
            'name' => 'Vulcan 122 AIMO', 
            'price' => 110, 
            'description' => 'The Vulcan is a precision gaming tool that lets you sense its performance from the first glance and the first key stroke. Developed following the renowned principles of German design and engineering, it is the best keyboard ROCCAT has ever built.', 
            'image' => 'Vulcan 122 AIMO.jpg'],

            ['category_id' => '6', 
            'name' => 'Vulcan 121 AIMO', 
            'price' => 110, 
            'description' => 'The Vulcan is the first keyboard to feature ROCCAT-developed Titan Switches. The switches, designed from the ground up, were built for gamers craving a key stroke that was swift and precise while still being tactile.', 
            'image' => 'Vulcan 121 AIMO.jpg'],

            ['category_id' => '6', 
            'name' => 'Vulcan 120 AIMO', 
            'price' => 100, 
            'description' => 'The Vulcan provides the best possible platform for the AIMO lighting engine. Each switch features an individually configurable, long-life LED capable of displaying 16.8M colors in a variety of special effects.', 
            'image' => 'Vulcan 120 AIMO.jpg'],

            ['category_id' => '6', 
            'name' => 'Vulcan 100 AIMO', 
            'price' => 150, 
            'description' => 'An anodized aluminum plate reinforces the Vulcans structural integrity and protects against wear and tear. The detachable palm rest and low-profile keyboard design improve ergonomics, making it suitable for long periods of game time. Key caps are specially designed for easy maintenance.', 
            'image' => 'Vulcan 100 AIMO.jpg'],

            ['category_id' => '6', 
            'name' => 'Horde AIMO', 
            'price' => 20, 
            'description' => 'The Horde AIMO brings a new meaning to the word extras. Its ROCCAT-pioneered Membranical keys represent the best of both worlds between membrane and mechanical. It also contains custom keys designed and engineered to enhance key distinction.', 
            'image' => 'Horde AIMO.jpg'],

            // (7/7) 10 Ducky
            ['category_id' => '7', 
            'name' => 'Zero 3108 Blue LED', 
            'price' => 180, 
            'description' => 'Extremely Narrow Frame Design. Makes it neat and tidy in visual.', 
            'image' => 'Zero 3108 Blue LED.jpg'],

            ['category_id' => '7', 
            'name' => 'One 2 Mini Horizon', 
            'price' => 170, 
            'description' => 'Anti-Ghosting. Longer life expectancy & signal stability. Handle any number of simultaneous key presses with the option of N-key or 6-Key Rollover.', 
            'image' => 'One 2 Mini Horizon.jpg'],

            ['category_id' => '7', 
            'name' => 'One 2 SF Iodine', 
            'price' => 150, 
            'description' => 'All New Petite Bezel Design. The new bezel design shares a similar sleek frame as its predecessor, but the One 2 incorporates dual colors on the bezel to match all varieties of keycap colorways.', 
            'image' => 'One 2 SF Iodine.jpg'],

            ['category_id' => '7', 
            'name' => 'One 3 Yellow Ducky', 
            'price' => 190, 
            'description' => 'True。PBT. QUACK Mechanics uses only the finest materials, our keycaps are made from true PBT. The seamless legends are formed through a double-shot technique where two plastics are molded together, allowing legends to never fade away even after multiple years of use. Finished with a frosted surface, and these keycaps are shine and stain-resistant, made for fast movements and non-stop use, all while maintaining their original look.', 
            'image' => 'One 3 Yellow Ducky.jpg'],

            ['category_id' => '7', 
            'name' => 'One 3 DayBreak', 
            'price' => 205, 
            'description' => 'Optimized Construction. The weight distribution and lowered case height improve the keyboards overall stability and poise during the most rigorous of moments. Its front-to-back weight ratio is meticulously engineered to keep the keyboard in one unwavering position, essential for advanced gaming and typing.', 
            'image' => 'One 3 DayBreak.jpg'],

            ['category_id' => '7', 
            'name' => 'One 3 TKL Fuji', 
            'price' => 165, 
            'description' => 'Authentic Acoustics. A multi-layered padding design is present to spotlight raw acoustics from your switches of choice and reduce unwanted noise during use.
            Moreover, a supplementary layer of EVA foam pad is located underneath the PCB to provide further improve sound reduction and the negation of any unwanted sounds.', 
            'image' => 'One 3 TKL Fuji.jpg'],

            ['category_id' => '7', 
            'name' => 'Mecha Mini', 
            'price' => 175, 
            'description' => 'Detachable USB Type-C. We use USB HID with the highest frequency of 1000Hz polling rate, meaning the keyboard is sending its input signal(s) to your PC 1000 times per second.', 
            'image' => 'Mecha Mini.jpg'],

            ['category_id' => '7', 
            'name' => 'Mecha SF Ocean', 
            'price' => 196, 
            'description' => 'Mecha SF Radiant Series. Miniature 65% form factor, special iridescent finish on our timeless aluminum casing ft. a new keycap color scheme', 
            'image' => 'Mecha SF Ocean.jpg'],

            ['category_id' => '7', 
            'name' => 'Mecha Llama', 
            'price' => 220, 
            'description' => 'Full aluminum casing. The new bezel design shares a similar sleek frame as its predecessor. Optimize comfortability. 2 level angle adjustment keyboard stand made of Zinc alloy. Diversified RGB light effects. With fully customizable hardware.', 
            'image' => 'Mecha Llama.jpg'],

            ['category_id' => '7', 
            'name' => 'Shine 7', 
            'price' => 140, 
            'description' => 'A new cutting edge design fitted for you. Brand new Zinc Alloy top case with dynamic bezel design, three times stronger than aluminum.', 
            'image' => 'Shine 7.jpg'],
        ]);
    }
}

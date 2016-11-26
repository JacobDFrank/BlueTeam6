<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ryan on Security</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

    <style>
        #courses {
            background: #FF9800 !important;
        }
        #security {
            background: #FF9800 !important;
            color: white !important;
        }
    </style>

    <section class="container">
        <section class="row" id="personHead">
            <div class="col-md-7 col-xs-12">
                <h1>Computer Security</h1>
                <br />
                <h2>By Ryan Sidebottom</h2>
            </div>
            <div class="col-md-2"></div>
            <img class="col-md-3 col-xs-6" src="../images/ryan.png"/>
        </section>
        <section class="row top-buffer well" id="topic">
            <div class="col-md-8">
                <h3>Intro to Cybersecurity</h3>
                <p>Cybersecurity is one of the fastest growing and most important fields in today’s world. Without cybersecurity professionals, the world and Internet could be chaos. No data would be safe. With the security professionals, there is so much more that everyone can do with the Internet.</p>
                <h4>What is Cybersecurity</h4>
                <p>Cybersecurity is the cat and mouse game played by hackers and defenders. Hackers, or attackers, try to breach into a network by passing through their actual network infrastructure (routers, switches, or network monitoring devices) or through their front facing applications (like their website or software). The defense part of cybersecurity is to prevent attackers from breaking into the network, programs, and products. As an ethical hacker (in simple terms, legal hacking) the attacker has the goal of breaking into the network and possibly exfiltrating data but he or she shares the results with the company to help them improve their security defenses (this is pentesting).</p>
                <h3>What are the fields/areas</h3>
                <h4>Network Security</h4>
                <p>This field deals specifically with stopping people from entering the network. Again, a break in can occur through a router or an appliance placed on the network. Their biggest job is monitoring the traffic entering and leaving the network. This is the easiest way for them to see the exfiltration of data and also potential attacks. By monitoring traffic, you can see how many times a certain IP address connects, or tries to connect, to you. By also defending at the network layer, you can block IP addresses from even entering your network which makes defense simple.</p>
                <h4>Pentesting</h4>
                <p>Pentesting is the ethical hacking we mentioned earlier. Pentesters have the job of breaking into a company’s network and then share with the company what they did so that the company can secure their network better. While doing this, pentesters are encouraged to act like malicious hackers except they have a certain contract which they cannot breach. They also cannot destroy the infrastructure and take down services. That is also a breach of their contract. They are typically allowed to find private data but they only share it with the company because they are ethical hackers.</p>
                <h4>Application Security</h4>
                <p>Application security deals with the security in a company’s product or application. Typically, this deals with exploits in the code of the application or vulnerabilities in the application itself. Usually it boils down to secure coding but it can also be about the software or application used. An older application will have more security holes than a newer one. This is why older version of the Windows operating system are really insecure and vulnerable to attacks.</p>
                <h3>Secure Coding</h3>
                <h4>Front End Security</h4>
                <p>Front end security refers to the part of the application users directly interact with. For web applications, it would be the web interface. You want your front end to not give away secrets about your internal network and you also want your front end to restrict what users can do. If a user is signed in, they should see more than someone who isn’t signed in.</p>
                <h4>Backend Security</h4>
				<p>Backend security is a little different, it deals a lot more with vulnerabilities and loopholes. Through the backend, malicious users can manipulate your service into giving them more data than you intended. There is a way to sign into certain pages without entering a password if the backend doesn’t validate the user input prior to using it. Through this, attackers can also exploit the backend to run commands remotely which will hurt a company even more. Without making the code secure, attackers can run extra commands and also change what the code in the program runs. Again, the most common solution in this area is validating, checking, user input and not letting their input simply be placed in commands.</p>
            </div>
            <div class="col-md-4 col-xs-12 pull-right top-buffer">
                <div class="row">
                    <a href="tutorial.php" class="btn btn-primary col-sm-12">Tutorial</a>
                </div>
                <div class="row top-buffer">
                    <a href="quiz.php" class="btn btn-primary col-sm-12">Quiz</a>
                </div>
            </div>
        </section>
        <section class="row well top-buffer" id="testimonials">
            <h2>Testimonials</h2>
            <div class="col-md-6">
                <div class="row">
                    <img class="col-md-4" src="../images/testimonials/security/stock_male.jpg" alt="Wade"/>
                    <div class="col-md-8">
                        <p>“I really enjoyed Ryan’s section on security! It really opened my eyes into the dangers that exist in the cyber realm. I didn’t know that some of the simplest of errors could wind up costing so much in damage.” - Wade M.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pull-right">
                <div class="row">
                    <img class="col-md-4" src="../images/testimonials/security/stock_female.jpg" alt="Kelsey"/>
                    <div class="col-md-8">
                        <p>“Ryan’s crash course on security was extremely helpful! As a someone who is totally new to the field of security I was astounded at how easy it was to be vulnerable. I really enjoyed how he presented the information to us. I thought it was presented in a way that made it simple to understand and easy to see how it all correlated. Even the quiz on his site was phenomenal! I feel so much more secure now knowing how to protect some applications as well as how to find vulnerable, unsafe applications.” - Kelsey C.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="row well" id="strengths">
            <div class="col-md-12">
                <h2>My Strengths and Abilities</h2>
                <p>Cybersecurity itself is an expansive field; there is a lot to it. There is physical security, network security, computer security, Internet of Things device security, message security and more. My overview on security will go through a few of the fields in which I am most proficient in (Network and application security) as well as a field which I have a lot of interest in (pentesting). I have worked almost exclusively in the network security field but have spent some time working on application security. Penetration testing is a bit new to me but I have friends who have done it and I have dabbled a bit in it. If you are looking to get started in any of these fields feel free to contact me and I can help get you started!</p>
            </div>
        </section>
        <section class="row well" id="aboutMe">
            <h2>Whoami?</h2>
            <p>I am a third year student at RIT majoring in Computing Security. Throughout my time here at RIT, I have continually expanded my knowledge in cybersecurity by completing work in various fields related to cybersecurity. Both of my two summer internships have resulted in me gaining knowledge and skill with network security. Those summers, I worked with the security team to watch the network and monitor what entered and left our network. While at school, I have engaged in some penetration testing style events called Capture the Flag challenges (CTFs). These challenges are presented to you and you need to exploit it in a certain way while maintaining the integrity of the challenge (so that others can work on it). This is similar to pentesting in the sense that you are told to attack the network but you cannot destroy or dismantle it. Outside of security, I am involved in Ultimate Disc as it is my sport of choice. If I am not busy with disc or security, you can probably find me relaxing in my room as I play videogames to wind down a bit.</p>
        </section>
    </section>

    <?php include '../footer.php' ?>
</body>
</html>

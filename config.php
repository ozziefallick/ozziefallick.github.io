<?
// Enter your personal details here to build your online resume.

// Let's start with some basic info.  You must include your full name, but if you don't want to include your phone number or email address you can just delete those lines entirely.
$personal['first_name']= 'Ozzie';
$personal['last_name'] = 'Fallick';
$personal['phone_number'] = '(573) 569-9433';
$personal['email_address'] = 'ozzie.fallick@gmail.com';

// Now let's add any social media pages you've created and want to share.  You can add whatever you want by following the format below.  The first item you add is the name of the social media site, and the second item you add is the URL to your page.
$social_media[] = array('LinkedIn', 'http://www.linkedin.com/profile/view?id=99484667');
$social_media[] = array('Github', 'http://www.github.com/ozziefallick');

// Cool.  With that stuff out of the way, let's input your work history.  This part requires a bit more information but it's similar to adding a social media page like you did above but with more information.  The first item you enter is last year you worked at the job (or the range of time, if you prefer).  The second item is your job title, the third is the company you worked for, and the fourth is a description of the work you did there.  The description can get a little long, but that's okay.  Just be sure not to use any single quotes ('') or things will break!  You can add as many jobs as you like and the script will adapt.
$work_history[] = array('2011-',
						'Researcher/Programmer',
						'University of Maryland Institute for Advanced Computer Studies',
						'<ul><li>Developed suite of scripts to transliterate between languages</li>
						<li>Used carmel to evaluate probabilistic finite state machines</li></ul>');
$work_history[] = array('2012-',
						'Sabre Captain',
						'University of Maryland Fencing Club',
						'<ul><li>Lead drills</li>
						<li>Select rosters for competitions</li></ul>');
$work_history[] = array('2014',
						'Teaching Assistant, Language and Mind',
						'University of Maryland Department of Linguistics',
						'<ul><li>Held regular office hours</li>
						<li>Graded student papers</li></ul>');
$work_history[] = array('2011-2013',
						'Intern Software Developer',
						'Arcode Corporation',
						'<ul><li>Implemented RSS reader for Inky email client</li>
						<li>Implemented ADrive integration for Inky email client and served as ADrive liaison</li></ul>');
$work_history[] = array('2013',
						'Teaching Assistant, Data Structures',
						'University of Maryland Department of Computer Science',
						'<ul><li>Held regular office hours</li></ul>');
$work_history[] = array('2012-2013',
						'President',
						'University of Maryland Fencing Club',
						'<ul><li>Maintained normal operation with one-third of normal funds allocation</li>
						<li>Oversaw club operation, delegated tasks, and communicated with Sport Clubs Program administration</li></ul>');
$work_history[] = array('2010-2012',
						'Student Council Member',
						'Digital Cultures and Creativity',
						'<ul><li>Organized program events and allocated funds</li></ul>');

// Phew!  That was the hard part.  Now we need to enter in some other important information about you.  Let's start with your education.  You only need to enter two things: your school and a description of your degree.  If you went to Brown University you'd enter that for your school, then put your year and graduation date as the description (e.g. "BA in Social Sciences, Class of 2002").
$education[] = array('University of Maryland', 'BS in Computer Science<br />
	     BA in Linguistics (German concentration)<br />
	     Digital Cultures and Creativity Honors Citation<br />
	     Class of 2014<br />
	     Cumulative GPA: 4.00');
$education[] = array('Montgomery Blair High School', 'Science, Mathematics, and Computer Science Magnet Program<br />
	     Class of 2010');

// Presumably you learned something in school and developed a few skills over the course of your lifetime.  Let's add them here.  
$skills[] = array('Programming Languages', '<em>Proficient:</em> Java, Python, Ruby, JavaScript, Qooxdoo, OCaml<br />
	  <em>Some familiarity:</em> Rails, PHP, C, SQL');
$skills[] = array('Software', 'Unix, Emacs, Eclipse, Git');
$skills[] = array('Foreign Languages', 'French, 4 years<br />
	  German, 2 years<br />
	  Latin, 3 years');

// Finally, let's list any awards or honors you've received so you can show off your accomplishments.  To add an award, just use the format below.  (I'm sure you have the hang of this by now, but we're going to go over it anyway.)  The first item you enter is the name of the award/honor (e.g. "Advertising Gold Award" or "Published in the New Yorker") and the second item is the description of the award/honor (e.g. "2010 TV Ads Under $50,000" or "Short story about the trials of Orthodox Jews in Arkansas, May 2016").
$awards[] = array('Dean\'s List', 'Fall 2010-Spring 2013');
$awards[] = array('Dean\'s Senior Scholars Award Nominee', 'College of Arts and Humanities, University of Maryland');
$awards[] = array('Mike Brown Award', 'Capitol Division, US Fencing Association');
$awards[] = array('Upsilon Pi Epsilon', 'Computer science honor society');
$awards[] = array('Primannum Honor Society', 'Freshman honor society, comprising Alpha Lambda Delta and Phi Eta Sigma');
$awards[] = array('President\'s Scholarship', 'University of Maryland');
$awards[] = array('Maryland Distinguished Scholar', 'Maryland Higher Education Commission');
$awards[] = array('National Merit Scholar', 'National Merit Scholarship Corporation');
$awards[] = array('Summa Cum Laude', 'National Latin Exam Level III/IV Prose');
$awards[] = array('Invitational Round', 'North American Computational Linguistics Olympiad');
$awards[] = array('Cum Honore Maximo Egregio', 'National Latin Exam Level I');

// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)
$settings['social_media'] = true;
$settings['education'] = true;
$settings['skills'] = true;
$settings['awards'] = true;

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable'] = false;
$settings['style'] = "light";
$settings['lang'] = "en";
?>
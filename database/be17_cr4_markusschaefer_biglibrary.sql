-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 05:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be17_cr4_markusschaefer_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `isbn_code` bigint(12) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `author_first_name` varchar(100) NOT NULL,
  `author_last_name` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `publisher_address` varchar(200) NOT NULL,
  `publisher_date` date NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `isbn_code`, `description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publisher_date`, `availability`) VALUES
(1, 'Lord of the Rings - The Fellowship of the Ring', '636fba34ba3c3.jpg', 431956782540, 'One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkeness bind themIn ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, The Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, it remained lost to him. After many ages it fell into the hands of Bilbo Baggins, as told in The Hobbit.In a sleepy village in the Shire, young Frodo Baggins finds himself faced with an immense task, as his elderly cousin Bilbo entrusts the Ring to his care. Frodo must leave his home and make a perilous journey across Middle-earth to the Cracks of Doom, there to destroy the Ring and foil the Dark Lord in his evil purpose.', 'Book', 'J.R.R', 'Tolkien', 'George Allen & Unwin', '', '1954-07-29', 1),
(2, 'Lord of the Rings - The Two Towers', '636fba3dc164d.jpg', 349820573861, 'Begin your journey into Middle-earth.The inspiration for the upcoming original series on Prime Video, The Lord of the Rings: The Rings of Power.The Two Towers is the second part of J.R.R. Tolkien’s epic adventure The Lord of the Rings.One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them.Frodo and his Companions of the Ring have been beset by danger during their quest to prevent the Ruling Ring from falling into the hands of the Dark Lord by destroying it in the Cracks of Doom. They have lost the wizard, Gandalf, in a battle in the Mines of Moria. And Boromir, seduced by the power of the Ring, tried to seize it by force. While Frodo and Sam made their escape, the rest of the company was attacked by Orcs. Now they continue the journey alone down the great River Anduin—alone, that is, save for the mysterious creeping figure that follows wherever they go.', 'Book', 'J.R.R', 'Tolkien', 'George Allen & Unwin', '', '1954-11-11', 1),
(3, 'Lord of the Rings - The Return of the King', '636fba45bfb87.jpg', 673892015804, 'Begin your journey into Middle-earth.The inspiration for the upcoming original series on Prime Video, The Lord of the Rings: The Rings of Power.The Return of the King is the third part of J.R.R. Tolkien’s epic adventure The Lord of the Rings.One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them.The Dark Lord has risen, and as he unleashes hordes of Orcs to conquer all Middle-earth, Frodo and Sam struggle deep into his realm in Mordor.To defeat Sauron, the One Ring must be destroyed in the fires of Mount Doom. But the way is impossibly hard, and Frodo is weakening. The Ring corrupts all who bear it and Frodo’s time is running out.Will Sam and Frodo succeed, or will the Dark Lord rule Middle-earth once more?', 'Book', 'J.R.R', 'Tolkien', 'George Allen & Unwin', '', '1955-10-20', 1),
(55, 'Star Wars - The Phantom Menace', '636fc869c81b5.jpg', 457812452356, 'Star Wars: Episode I The Phantom Menace is a 1999 film written and directed by George Lucas, produced by Rick McCallum and starring Liam Neeson, Ewan McGregor, Natalie Portman, Jake Lloyd, and Ian McDiarmid. It is the first chapter of the Star Wars prequel trilogy, the fourth theatrical Star Wars release overall, and chronologically the first film in the Star Wars saga.The Phantom Menace was released in theaters on May 19, 1999, becoming the first Star Wars film since Star Wars: Episode VI Return of the Jedi, which was released sixteen years earlier. The release was accompanied by extensive media coverage and great fan anticipation. Despite mixed reviews from critics and fans, the film grossed $924.3 million worldwide, making it the second-highest-grossing Star Wars film when unadjusted for inflation. It was re-released on Blu-ray in September 2011, and was re-released in theaters in 3D on February 10, 2012.The film was the catalyst for fifteen years of Star Wars storytelling that would primarily take place around the time of the prequel storyline. The success of the film allowed for the next two chapters of the prequel trilogy, as well as the Star Wars: The Clone Wars film and television series. ', 'DVD', 'George', 'Lucas', 'Lucas Arts', '', '1999-05-19', 0),
(56, 'Star Wars - The Clone Wars', '636fb51ca7a10.jpg', 467925813465, 'Star Wars: Episode II Attack of the Clones is a 2002 film directed by George Lucas and written by Lucas and Jonathan Hales. It is the second part of the Star Wars prequel trilogy.\r\n\r\nThe film is set ten years after the Battle of Naboo, when the galaxy is on the brink of civil war. Under the leadership of renegade Jedi Master Count Dooku, thousands of systems threaten to secede from the Republic. When an assassination attempt is made on Senator Padmé Amidala, the former Queen of Naboo, Jedi apprentice Anakin Skywalker is assigned to protect her, while his mentor Obi-Wan Kenobi is assigned to investigate the assassination attempt. Soon the Jedi are drawn into the heart of the Separatist movement, and the beginning of a new threat to the galaxy: the Clone Wars.\r\n\r\nAttack of the Clones was the first Star Wars film to use a high-definition digital 24-frame system for most of its live-action scenes. The film was a financial success, grossing over $600 million at the worldwide box office. However, for the first time, a Star Wars film did not earn the highest box-office sales for the year; Attack of the Clones ended up fourth behind The Lord of the Rings: The Two Towers, Harry Potter and the Chamber of Secrets, and Spider-Man. ', 'DVD', 'George', 'Lucas', 'Lucas Arts', '', '2022-05-16', 0),
(57, 'Star Wars - Revenge of the Sith', '636fb52cbe530.jpg', 124578693548, 'Star Wars: Episode III Revenge of the Sith is a 2005 film written and directed by George Lucas. It is the third and final part of the Star Wars prequel trilogy.\r\n\r\nThree years after the First Battle of Geonosis and onset of the Clone Wars, the noble Jedi Knights have been leading a massive clone army into a galaxy-wide battle against the Confederacy of Independent Systems. The Supreme Chancellor of the Galactic Republic reveals his true nature as a Sith Lord as he unveils a plot to rule the galaxy by transforming the Republic into a Galactic Empire. Jedi hero Anakin Skywalker is seduced by the dark side of the Force to become Darth Sidious\'s new apprentice Darth Vader. The Jedi are all but eliminated with Obi-Wan Kenobi and Jedi Master Yoda forced into hiding. The only hope for the galaxy is Anakin\'s own offspring—the twin children born in secrecy who will grow up to become Luke Skywalker and Leia Organa.\r\n\r\nRevenge of the Sith was released in theaters on Thursday, May 19, 2005 (the same day that the first episode of the prequel trilogy The Phantom Menace was released in 1999), and premiered (out of competition) on the 2005 Cannes Festival May 15. The film was generally positively received by critics, especially in comparison to the two previous prequels. It broke several box office records in its opening week and went on to earn over US $800 million worldwide, making it one of the top-grossing movies of 2005. It is the second Star Wars film which used a high-definition digital 24 frame system for most of the movie\'s live-action scenes. The film was re-released in the Blu-ray format in September of 2011. On November 12, 2019, the film was included with the launch of Disney+. ', 'DVD', 'George', 'Lucas', 'Lucas Arts', '', '2005-05-19', 1),
(58, 'Harry Potter and the Philosopher\'s Stone', '636fb6c7c419a.jpg', 789456123025, 'Harry Potter is an orphaned boy brought up by his unkind Muggle (non-magical) aunt and uncle. At the age of eleven, half-giant Rubeus Hagrid informs him that he is actually a wizard and that his parents were murdered by an evil wizard named Lord Voldemort. Voldemort also attempted to kill one-year-old Harry on the same night, but his killing curse mysteriously rebounded and reduced him to a weak and helpless form. Harry became extremely famous in the Wizarding World as a result. Harry begins his first year at Hogwarts School of Witchcraft and Wizardry and learns about magic. During the year, Harry and his friends Ron Weasley and Hermione Granger become entangled in the mystery of the Philosopher\'s Stone which is being kept within the school. ', 'DVD', 'J.K.', 'Rowling', 'Warner Bros.', '', '2001-11-01', 1),
(59, 'Harry Potter and the Chamber of Secrets', '636fb644f016c.jpg', 586924713587, 'Harry, Ron, and Hermione return to Hogwarts for their second year, which proves to be more challenging than the last. The Chamber of Secrets has been opened, leaving students and ghosts petrified by an unleashed monster. Harry must face up to claims that he is the heir of Salazar Slytherin (founder of the Chamber), learn that he can speak Parseltongue, and also discover the properties of a mysterious diary, only to find himself trapped within the Chamber itself. ', 'DVD', 'J.K.', 'Rowling', 'Warner Bros.', '', '2002-11-16', 0),
(60, 'Harry Potter and the Prisoner of Azkaban', '636fb6bb4bf09.jpg', 658923147050, 'Harry\'s third year sees the boy wizard, along with his friends, attending Hogwarts School once again. Professor R. J. Lupin joins the staff as Defence Against the Dark Arts teacher, while convicted murderer Sirius Black escapes from Azkaban. The Ministry of Magic entrusts the Dementors to guard Hogwarts from Black. Harry learns more about his past and his connection with the escaped prisoner. ', 'DVD', 'J.K.', 'Rowling', 'Warner Bros.', '', '2004-05-31', 0),
(61, 'Greatest Hits I', '636fb9eda4f55.jpg', 102354976814, 'Track Listening:\r\n1 Bohemian Rhapsody\r\n2 Another One Bites The Dust\r\n3 Killer Queen\r\n4 Fat Bottomed Girls\r\n5 Bicycle Race\r\n6 You\'re My Best Friend\r\n7 Don\'t Stop Me Now\r\n8 Save Me\r\n9 Crazy Little Thing Called Love\r\n10 Somebody To Love\r\n11 Now I\'m Here\r\n12 Good Old-Fashioned Lover Boy\r\n13 Play The Game\r\n14 Flash\r\n15 Seven Seas Of Rhye\r\n16 We Will Rock You\r\n17 We Are The Champions', 'CD', '', 'Queen', 'EMI Elektra', '', '1981-10-26', 0),
(63, 'Greatest Hits II', 'placeholder.png', 659824173547, 'Track Listening:\r\n1 A Kind of Magic\r\n2 Under Pressure\r\n3 Radio Ga Ga\r\n4 I Want It All\r\n5 I Want to Break Free\r\n6 Innuendo\r\n7 It’s a Hard Life\r\n8 Breakthru\r\n9 Who Wants to Live Forever\r\n10 Headlong\r\n11 The Miracle\r\n12 I’m Going Slightly Mad\r\n13 The Invisible Man\r\n14 Hammer to Fall\r\n15 Friends Will Be Friends\r\n16 The Show Must Go On\r\n17 One Vision', 'CD', '', 'Queen', 'EMI Elektra', '', '1991-10-28', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 06:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(NULL, 'admin', 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(225) NOT NULL,
  `bname` varchar(200) DEFAULT NULL,
  `img` longblob NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `bname`, `img`, `description`) VALUES
(1, 'Mainbuilding', 0x7570696d6167652f6d61696e6275696c64696e672e6a7067, 'The central hub of the University of Computer Studies, Mandalay (UCSM), the main building proudly stands with its three floors,locates at the center of the campus.Its design seamlessly blends functionality and aesthetics, offering a conducive environment for learning and innovation.Here, students and teachers, driven by a shared passion for technological advancement and academic excellence.'),
(2, 'Male Dormitory M1', 0x7570696d6167652f6d616c65312e6a7067, 'Nestled in the northeast corner of the University of Computer Studies, Mandalay (UCSM) campus, the male dormitory exudes a sense of community and camaraderie. With its two floors, it offers a comfortable and secure living space for students. Surrounded by lush greenery, it provides a serene environment conducive to focused study and relaxation. Within its walls, friendships are forged, and memories are made, enriching the collegiate experience for all who call it home.There is only one way that can reach male dormitory from main building.It is 720 meters long.'),
(3, 'Male Dormitory M2', 0x7570696d6167652f302d30322d30362d316237306566623231666463646432316463663434313332653865613231346263636261336363363665363032626130333733356561663937323166343738625f373863316239306132303936346133652e6a7067, 'The male dormitory at the University of Computer Studies Mandalay (UCSM), identified by the Myanmar alphabet character \"ပ\" (pa), provides accommodations for up to 160 students. Offering a conducive living environment, it includes shared rooms and communal spaces for studying and socializing. With amenities like study lounges, recreational areas, and modern facilities, the dormitory ensures students\' comfort and convenience while fostering a sense of community and camaraderie among residents.There is only way that can reach male dormitory(M2) from main building. It is 655 meters long. '),
(4, 'Female Dormitory Community', 0x7570696d6167652f666d2e6a7067, 'Nestled in the scenic northwest corner of the University of Computer Studies, Mandalay (UCSM) campus, the female dormitory community comprises four buildings, each fostering a vibrant and supportive living environment.Nestled near the canteen. Surrounded by lush greenery, these structures offer a serene retreat for students. With simple interiors, they promote a sense of belonging and camaraderie among residents. Here, friendships blossom, and a strong sense of community thrives, enriching the collegiate experience at UCSM.There are two ways that can reach female dormitory from main building.One way is 690 meters long and other is 570 meters long.'),
(5, 'Female Dormitory(N Hall)', 0x7570696d6167652f666d312e6a7067, 'Nestled in the eastern section of the University of Computer Studies, Mandalay (UCSM) campus, the female dormitory offers a welcoming and secure environment for students. With its two floors, it provides comfortable living spaces. Surrounded by tranquil greenery, it fosters a conducive atmosphere for both study and relaxation. Here, students form lasting bonds and create cherished memories, enhancing the sense of community within UCSM\'s vibrant campus life.There is only one way that can reach female dormitory from main building.It is 577 meters long.'),
(6, 'Laboratory (building A)', 0x7570696d6167652f7068796c6162412e6a7067, 'The computer science lab at UCSM is in the northwest part of the campus. It\'s where students use modern tech for hands-on experiments, learning about programming, algorithms, and networking. Teachers guide them through practical tasks, helping them build practical skills. It\'s a space where students work together, solve problems, and apply what they learn to real-world situations, preparing for careers in computer science. There is only one way that can reach laboratory from main building.It is 580 meters long. '),
(7, 'Canteen (New)', 0x7570696d6167652f63616e7465656e2e6a7067, 'Situated in the  northwest corner of the University of Computer Studies, Mandalay (UCSM) campus, the canteen serves as a bustling hub of culinary delights and social interaction. Nestled amidst verdant surroundings, it offers a diverse array of delicious meals and refreshments to students, faculty, and visitors alike. With its inviting ambiance and friendly staff, the canteen provides a welcoming space for the UCSM community to gather, nourish both body and mind, and forge lasting connections.There is only one way that can reach canteen from main building.It is 712 meters long.'),
(8, 'Football Field', 0x7570696d6167652f7563736d2e6a7067, 'In the northwest corner of the University of Computer Studies, Mandalay (UCSM) campus, the football field stands as a vibrant hub for sports and camaraderie. Nestled near the canteen, this arena invites students and enthusiasts to engage in spirited matches. Bordered by lush greenery, the field provides an energizing backdrop for athletic pursuits, fostering a sense of community and healthy competition within the UCSM campus.There is only one way taht can reach football field from main building.It is 807 meters long.'),
(9, 'Parking Place', 0x7570696d6167652f7061726b696e672e6a7067, 'Conveniently positioned at the center of the University of Computer Studies, Mandalay (UCSM) campus, the parking area provides easy access for students,staffs, and visitors alike. Situated beside the main building, this centralized hub ensures efficient transportation for all members of the UCSM community. With vast space , it offers a safe and organized environment for vehicles. Its strategic location enhances accessibility, facilitating seamless transitions between academic pursuits and other campus activities.If you exit from west side exit of main building you will reach parking palce.'),
(11, 'Canteen (Old)', 0x7570696d6167652f7563736d2e6a7067, 'Situated adjacent to the football field,the Old Canteen at the University of Computer Studies, Mandalay, has been a beloved institution since its establishment in 1997. Steeped in nostalgia and tradition, this iconic culinary landmark holds a special place in the hearts of generations of students, faculty, and alumni.\r\nWith its quaint charm and rustic ambiance, the Old Canteen exudes a sense of warmth and familiarity, reminiscent of simpler times. Here, patrons can relish in an array of timeless favorites and classic comfort foods, lovingly prepared with time-honored recipes passed down through the years.\r\nDespite its age, the Old Canteen remains a bustling hub of activity, bustling with lively conversations and the aromatic scent of freshly cooked meals. From hearty breakfasts to quick lunches and afternoon snacks, the Old Canteen continues to serve as a cherished gathering spot where lifelong friendships are forged and cherished memories are made.While the New Canteen may boast modern amenities and sleek aesthetics, the Old Canteen holds a special place in the hearts of those who cherish its rich history and enduring legacy. As a testament to the university\'s heritage and commitment to community, the Old Canteen remains a beloved institution that continues to evoke feelings of nostalgia and camaraderie among all who pass through its doors. There is only one way that can reach new canteen from main building.It is 770 meters long. '),
(12, 'Laboratory (building B)', 0x7570696d6167652f7068796c6162422e6a7067, 'Nestled in the northwest quadrant of the University of Computer Studies, Mandalay (UCSM) campus.At UCSM\'s physics laboratory, students engage in a variety of experiments using standard equipment. Here, they delve into the world of physics, applying theoretical knowledge to real-world scenarios. With guidance from experienced instructors, students conduct hands-on experiments, gaining invaluable insights and honing their practical skills. The laboratory serves as a hub for scientific discovery and exploration, empowering students to unlock the mysteries of the physical world through experimentation and analysis.There is only one way that can reach laboratory from main building.It is 580 meters long.'),
(13, 'Sport Hall', 0x7570696d6167652f73706f72742e6a7067, 'The sport hall situated in the western sector of the University of Computer Studies Mandalay (UCSM) campus offers a dynamic space for physical activity and recreation. It caters to a variety of sports and fitness programs, accommodating students and teachers alike. This hall promotes a vibrant atmosphere conducive to sportsmanship, health, and community engagement within the university campus. There is two ways that ca reach sport hall from main building.One is 414 meters long and other one is 538 meters long.'),
(14, 'Staff Dormitory', 0x7570696d6167652f7563736d2e6a7067, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(225) NOT NULL,
  `rid` int(225) NOT NULL,
  `brid` int(225) NOT NULL,
  `departmentname` varchar(200) NOT NULL,
  `floors` varchar(225) NOT NULL,
  `imgdepartment` longblob NOT NULL,
  `descriptionOfDepartment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `rid`, `brid`, `departmentname`, `floors`, `imgdepartment`, `descriptionOfDepartment`) VALUES
(1, 5, 1, 'Student Affairs Department<br>(ကျောင်းသားရေးရာ)', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d346366386233303832343139363266336262383761616632666438386666393131383161306466373431633963386133653332353539643066363735336138325f3662363431623032346131393563342e6a7067, 'The Student Affairs Department at the University of Computer Studies Mandalay (UCSM) is dedicated to supporting students\' holistic development and well-being. With a range of services and resources, including academic advising, counseling, and extracurricular activities coordination, the department aims to enrich students\' university experience. From offering guidance on academic matters to organizing social events, the Student Affairs Department plays a vital role in fostering a vibrant and supportive campus community at UCSM.'),
(2, 16, 1, 'Staff Affairs Department', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d623264656364373765353438313832393538386538316365633438333164663764323332343835616266383938663463613034373334616130353161613961655f616462353061356433616331333434392e6a7067, 'The Staff Affairs Department at the University of Computer Study, Mandalay (UCSM) serves as a pivotal resource hub for faculty and staff members. Dedicated to enhancing the working environment, it oversees personnel matters including recruitment, benefits administration, performance evaluations, and professional development opportunities. With a focus on fostering a supportive and inclusive workplace culture, the department ensures that faculty and staff have the necessary support and resources to thrive in their roles within the university community.'),
(3, 17, 1, 'Engineering Department', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d376566333430333032636539656230623632343331303464363737646665623730306162616164613430653063663361303230373761633964623464313430305f613730663035306566383832396463352e6a7067, 'The Engineering Department at the University of Computer Study, Mandalay (UCSM) is where students learn about building and creating things like computers and electrical systems. Teachers help students understand both the theory and practice behind engineering. With modern facilities and hands-on projects, students get ready to solve real-world problems in fields like computer and electrical engineering. This prepares them for exciting careers where they can make a difference with their skills.'),
(6, 5, 1, 'Finance Department<br>ငွေစာရင်းဌာန', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d353062623038313730666666623065653437663265623537613366653239343534366439353437323638316338333163623065626465643331306661626232315f323165373132393334646230656437642e6a7067, 'The finance department at the University of Computer Studies Mandalay (UCSM) manages budgets, tracks expenditures, and ensures transparent financial practices. It plays a vital role in resource allocation and supports the university\'s growth through strategic financial planning and analysis. By fostering integrity and accountability, the department contributes to UCSM\'s financial stability and success.'),
(7, 18, 1, 'Career Department', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d653233373433336235666365626362643161663037666635343362333330653862626163383831646438636166653232626162646562326632623662666235365f326539623564613231376333643236372e6a7067, 'The Career Department at the University of Computer Study, Mandalay (UCSM) is committed to guiding students towards successful professional pathways. Offering comprehensive career counseling, workshops, and job placement services, the department equips students with the skills and resources needed to navigate the job market effectively. From resume building to interview preparation, it provides tailored assistance to help students achieve their career goals. By fostering connections with employers and organizing recruitment events, the Career Department bridges the gap between academia and industry, empowering students to embark on fulfilling careers post-graduation.'),
(8, 22, 1, 'Department of Physics', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d313264326264663639393631393564306666386534383066306634363532616532653265313938306665376335356663646538373236356637616638343136395f333865373564386563396630376363392e6a7067, 'The Department of Physics at the University of Computer Studies, Mandalay (UCSM) is dedicated to providing comprehensive education and research opportunities in the field of physics. With a focus on both theoretical knowledge and practical applications, the department offers a diverse range of courses and research initiatives. Faculty members are committed to fostering intellectual curiosity and critical thinking skills among students, preparing them for careers in academia, industry, and research.'),
(9, 33, 1, 'Campus management Department', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d333863303530666563626264303632393036646130303864343262646463653833396537386335386233653639383664333139303265376237393735666634365f643032653161353861386639316439612e6a7067, 'The campus maintenance department at the University of Computer Studies Mandalay (UCSM) is dedicated to preserving the campus\'s infrastructure and ensuring a safe and conducive learning environment. From repairing facilities to landscaping, their responsibilities encompass a wide range of tasks. Through regular inspections and timely maintenance, they uphold the university\'s standards of excellence, enhancing the overall experience for students, faculty, and staff. With a focus on efficiency and quality, the maintenance team plays a crucial role in supporting UCSM\'s mission of academic excellence'),
(10, 34, 1, 'Dispensary and Clinic', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d366333653539653432383737323566663139376632643933653361313732356464336666333366383364343238333531326235636332313161353065633662665f336365643433666633333863363066612e6a7067, 'The Dispensary and Clinic at the University of Computer Studies, Mandalay (UCSM) is where students and staff go for medical help. It\'s staffed with doctors and has tools to check health. They help with basic health needs, keep people healthy, and handle small medical issues. Their goal is to make sure everyone at the university stays well and can focus on their studies.'),
(11, 50, 1, 'Department of Myanmar', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d386166393965653762653166666439346263663362393265623935363932353666333837363630646338356464626436393464313234336132356132393839385f663034653136303739346361336666332e6a7067, 'The Department of Myanmar at the University of Computer Studies, Mandalay (UCSM) focuses on teaching the Myanmar language and literature. It offers courses that cover various aspects of Myanmar language, including grammar, literature, and writing skills. The department aims to preserve and promote the rich cultural heritage of Myanmar through language education. Additionally, it fosters an understanding of Myanmar literature and its significance in the broader context of society and literature studies.'),
(12, 50, 1, 'Department of English', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d366531336163653333366666356661333166663463373165643237356630666561643964646637363362326238613032323133333662633135303931333061615f373339346431383565373434633861342e6a7067, 'The Department of English at the University of Computer Studies, Mandalay (UCSM) offers comprehensive programs designed to enhance students\' proficiency in the English language. Through a combination of language courses, literature studies, and practical communication skills development, the department equips students with the linguistic tools necessary for success in various academic and professional fields. Additionally, it fosters an appreciation for English literature and cultural understanding, preparing students for global communication and collaboration.'),
(13, 51, 1, 'Faculty of Computational Mathematics', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d623539303563383633303331626236343537643932336461303339303338663732356232373862306235323530383538313238386237363134303337393062315f323637336639366135373362616631342e6a7067, 'The Faculty of Computational Mathematics at UCSM teaches students how to use math and computers together to solve big problems. They learn advanced math and how to write programs to solve real-world problems. Students get to work on projects and do research to learn even more. This helps them prepare for jobs in areas like data science, artificial intelligence, and computer security.'),
(14, 85, 1, 'Faculty of Computer Science', 'It is located at second floor.', 0x7570696d6167652f70686f746f5f323032342d30322d32385f32322d31302d34362e6a7067, 'The Faculty of Computer Science at UCSM is dedicated to teaching students about computers and how to use them effectively. Students learn about programming, software development, networking, and more. They gain practical skills through hands-on projects and real-world applications. With a focus on innovation and problem-solving, students are prepared for careers in technology, software engineering, cybersecurity, and beyond.'),
(15, 84, 1, 'Faculty of Computer Systems and Technologies', 'It is located at second floor.', 0x7570696d6167652f70686f746f5f323032342d30322d32385f32322d31302d35332e6a7067, 'The Faculty of Computer Systems and Technologies at UCSM teaches students about computers and technology. They learn about how computers work, including their hardware and software. Students study topics like operating systems, databases, and cybersecurity. They also gain hands-on experience to build and maintain computer systems. After graduation, students can work in various fields such as system administration, network engineering, and software development.'),
(16, 82, 1, 'International Relations Department', 'It is located at second floor.', 0x7570696d6167652f70686f746f5f323032342d30322d32385f32322d31312d30392e6a7067, 'The International Relations Department at UCSM teaches about global issues and diplomacy. Students learn about politics, economics, and social matters worldwide. They study international organizations, treaties, and conflicts. The department covers topics like globalization, human rights, and foreign policies. Through research, students understand the complexities of international relations and prepare for careers in diplomacy, global organizations, or international business.'),
(17, 83, 1, 'Faculty of Information Science', 'It is located at second floor.', 0x7570696d6167652f70686f746f5f323032342d30322d32385f32322d31312d32302e6a7067, 'The Faculty of Information Science at UCSM offers programs focusing on computer-based information systems. Students learn about data management, software development, and information technology. They study topics like database systems, programming languages, and network security. The faculty equips students with skills in data analysis, software engineering, and digital communication. Graduates are prepared for careers in various sectors such as technology companies, government agencies, or research institutions.'),
(18, 96, 1, 'Department of Information Technology Support and Maintenance', 'It is located at second floor.', 0x7570696d6167652f70686f746f5f323032342d30322d32385f32322d31312d32382e6a7067, 'The Department of Information Technology Support and Maintenance at UCSM provides essential services for the upkeep and functionality of the university\'s IT infrastructure. It ensures the smooth operation of computer systems, networks, and software applications. The department handles troubleshooting, maintenance, and upgrades to keep technology resources running efficiently. Additionally, it offers technical support to students, faculty, and staff, assisting with issues related to hardware, software, and network connectivity.');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(225) NOT NULL,
  `bid` int(225) NOT NULL,
  `roomnum` varchar(225) NOT NULL,
  `floor` varchar(225) NOT NULL,
  `imgroom` longblob NOT NULL,
  `descriptionOfRoom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `bid`, `roomnum`, `floor`, `imgroom`, `descriptionOfRoom`) VALUES
(1, 1, '001', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'don\'t use yet'),
(2, 1, '002', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'don\'t use yet'),
(4, 1, '003', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'The exam room at the University of Computer Studies Mandalay (UCSM) provides a focused and conducive environment for students to demonstrate their knowledge and skills. Equipped with spacious desks, comfortable seating, and adequate lighting, it ensures an optimal setting for examinations. With strict adherence to academic integrity and regulations, the room fosters a fair and impartial assessment process, supporting the university\'s commitment to academic excellence and integrity.'),
(5, 1, '004', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'The Student Affairs Department at the University of Computer Studies Mandalay (UCSM) is dedicated to supporting students\' holistic development and well-being. With a range of services and resources, including academic advising, counseling, and extracurricular activities coordination, the department aims to enrich students\' university experience. From offering guidance on academic matters to organizing social events, the Student Affairs Department plays a vital role in fostering a vibrant and supportive campus community at UCSM.'),
(6, 1, '005', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'need to fill'),
(7, 1, '006', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(8, 1, '007', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'This room is used as classroom now.'),
(9, 1, '008', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'This room is used as classroom now.'),
(10, 1, '009', 'It is located at ground floor.', 0x7570696d6167652f61732e6a7067, 'This room is used as classroom now.'),
(11, 1, '010', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'This room is used as classroom now.'),
(12, 1, '011', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'This room is used as classroom now.'),
(13, 1, '012', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(14, 1, '013', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(15, 1, '014', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(16, 1, '015', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'This room is used as staff affair department now.'),
(17, 1, '016', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(18, 1, '017', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(19, 1, '018', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(20, 1, '019', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(21, 1, '020', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(22, 1, '021', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'This room is used as department of physics now.'),
(23, 1, '022', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(24, 1, '023', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(25, 1, '024', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(26, 1, '025', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(27, 1, '026', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(28, 1, '027A', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(29, 1, '027B1', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(30, 1, '027B2', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(31, 1, '027B3', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(32, 1, '027C', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, ''),
(33, 1, '027D', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'This room is used as campus maintenance department now.'),
(34, 1, '027E', 'It is located at ground floor.', 0x7570696d6167652f666c6f6f72312e6a7067, 'This room is used as dispensary and clinic now.'),
(35, 1, '101', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(36, 1, '102', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(37, 1, '103', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(38, 1, '104', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(39, 1, '105', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(40, 1, '106', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(41, 1, '107', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(42, 1, '108', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(43, 1, '109', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(44, 1, '110', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(45, 1, '111', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(46, 1, '112', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(47, 1, '113', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(48, 1, '114', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(49, 1, '115', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(50, 1, '116', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(51, 1, '117', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(52, 1, '118', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(53, 1, '119', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(54, 1, '120', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(55, 1, '121', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(56, 1, '122', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(57, 1, '123', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(58, 1, '124', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(59, 1, '125', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(60, 1, '126', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(61, 1, '127', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(62, 1, '128', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(63, 1, '128B', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(64, 1, '128C', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(65, 1, '128D', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(66, 1, '128E', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(67, 1, '128F', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(68, 1, '128G', 'It is located at second floor.', 0x7570696d6167652f666c6f6f72322e6a7067, ''),
(69, 1, '201', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(70, 1, '202', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(71, 1, '203', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(72, 1, '204', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(73, 1, '205', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(74, 1, '206', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(75, 1, '207', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(76, 1, '208', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(77, 1, '209', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(78, 1, '210', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(79, 1, '211', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(80, 1, '212', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(81, 1, '213', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, '\r\n'),
(82, 1, '214', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(83, 1, '215', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(84, 1, '216', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(85, 1, '217', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(86, 1, '218', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(87, 1, '219', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(88, 1, '220', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(89, 1, '221', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(90, 1, '222', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(91, 1, '223', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(92, 1, '224', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(93, 1, '225', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(94, 1, '226', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(95, 1, '226B', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(96, 1, '226C', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(97, 1, '226D', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(98, 1, '226E', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(99, 1, '226F', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(100, 1, '226G', 'It is located at third floor.', 0x7570696d6167652f666c6f6f72332e6a7067, ''),
(101, 3, 'G1', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(102, 3, 'G2', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(103, 3, 'G3', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(104, 3, 'G4', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(105, 3, 'G5', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(106, 3, 'G6', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(107, 3, 'G7', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(108, 3, 'G8', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(109, 3, 'G9', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(110, 3, 'G10', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(111, 3, 'G11', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(112, 3, 'G12', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(113, 3, 'G13', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(114, 3, 'G14', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(115, 3, 'G15', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(116, 3, 'G16', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(117, 3, 'G17', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(118, 3, 'G18', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(119, 3, 'G19', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(120, 3, 'G20', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(121, 3, 'G21', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(122, 3, 'G22', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(123, 3, 'G23', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(124, 3, 'G24', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(125, 3, 'G25', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(126, 3, 'G26', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(127, 3, 'G27', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(128, 3, 'G28', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(129, 3, 'G29', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(130, 3, 'G30', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(131, 3, 'G31', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(132, 3, 'G32', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(133, 3, 'G33', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(134, 3, 'G34', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(135, 3, 'G35', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(136, 3, 'G36', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(137, 3, 'G37', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(138, 3, 'G38', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(139, 3, 'G39', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(140, 3, 'G40', 'It is located at ground floor.', 0x7570696d6167652f302d30322d30362d383561323837336563346561376338663561666165356539623033656261363961346537303331363464653731636433663730363131616236626635386434635f616333373765333765663963356663322e6a7067, ''),
(141, 3, 'F1', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(142, 3, 'F2', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(143, 3, 'F3', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(144, 3, 'F4', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(145, 3, 'F5', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(146, 3, 'F6', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'ပြည့်စုံမိုး(ချိန်ပါမော်ကြီး)'),
(147, 3, 'F7', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(148, 3, 'F8', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(149, 3, 'F9', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(150, 3, 'F10', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(151, 3, 'F11', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(152, 3, 'F12', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(153, 3, 'F13', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'ရန်လင်းအောင်'),
(154, 3, 'F14', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(155, 3, 'F15', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(156, 3, 'F16', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(157, 3, 'F17', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, '‌ဝေယံဖြိုးလွင်'),
(158, 3, 'F18', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'အောင်ဘုန်းပြည့်စုံ'),
(159, 3, 'F19', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(160, 3, 'F20', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(161, 3, 'F21', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(162, 3, 'F22', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(163, 3, 'F23', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(164, 3, 'F24', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(165, 3, 'F25', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(166, 3, 'F26', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(167, 3, 'F27', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(168, 3, 'F28', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(169, 3, 'F29', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'ထိုက်စည်သူအောင်'),
(170, 3, 'F30', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'ချစ်ကိုကိုအောင်(Bottom) နှင့် ခန့်ဇင်ဟိန်း'),
(171, 3, 'F31', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'ရဲနိုင်ဝင်း'),
(172, 3, 'F32', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'အောင်ကျော်သက်'),
(173, 3, 'F33', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'ကောင်းထက်'),
(174, 3, 'F34', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, 'မလန်နော်ဆွတ်အောင်'),
(175, 3, 'F35', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(176, 3, 'F36', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(177, 3, 'F37', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(178, 3, 'F38', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(179, 3, 'F39', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(180, 3, 'F40', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(181, 3, 'F41', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, ''),
(182, 3, 'F42', 'It is located at first floor.', 0x7570696d6167652f302d30322d30362d653261326561333435636132653431373338313534643564303934383737666431316331663138653635356134306163333930363937646461623633336532365f623066626165366532386162346635352e6a7067, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rid` (`rid`),
  ADD KEY `brid` (`brid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bid` (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `department_ibfk_2` FOREIGN KEY (`brid`) REFERENCES `buildings` (`id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `buildings` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 06:11 AM
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
-- Database: `prg11`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ريم العائد', 'Ralayed48@gmail.com', 'السلام عليكم ورحمة الله وبركاته', NULL, NULL),
(15, 'Eleanore Fay', 'asa.ferry@block.biz', 'Expedita eius nulla quidem beatae. Cum numquam provident quidem natus qui et sed. Iure consequatur molestiae aperiam a omnis et magni eius.', '2024-08-13 12:06:55', '2024-08-13 12:06:55'),
(16, 'Hermina Sauer', 'marks.timothy@senger.com', 'Et laborum nisi aperiam id. Est aut ab dolorum minima magni aspernatur et. Ratione aut harum assumenda numquam distinctio dolores.', '2024-08-13 12:06:55', '2024-08-13 12:06:55'),
(17, 'Vito Conn', 'wdaniel@gmail.com', 'Beatae deserunt eveniet sit. Alias asperiores ea est omnis magni illo. Quam eius possimus natus consequatur reiciendis provident quo deleniti. Ut perferendis veritatis dolor possimus sint officiis.', '2024-08-13 12:06:55', '2024-08-13 12:06:55'),
(18, 'Avis Franecki', 'kulas.jarrod@gmail.com', 'Eligendi quia harum sed est dolor aliquid occaecati. Perspiciatis ea sit nesciunt quaerat. Facilis non repudiandae cupiditate odit soluta perspiciatis.', '2024-08-13 12:06:55', '2024-08-13 12:06:55'),
(19, 'Michele Denesik MD', 'eddie09@gmail.com', 'Fugiat assumenda quis et quo ad. Autem quo dignissimos voluptatem commodi nihil necessitatibus soluta. Distinctio earum eius voluptas.', '2024-08-13 12:06:55', '2024-08-13 12:06:55'),
(20, 'Lela Heidenreich', 'jesse.keeling@gmail.com', 'Quaerat aut et magnam. Quos sit nesciunt illo excepturi autem qui. Sit fugit sint sunt deserunt laboriosam.', '2024-08-13 12:06:55', '2024-08-13 12:06:55'),
(21, 'Keagan Bins V', 'aswaniawski@yahoo.com', 'Velit beatae maiores tempore ad. Mollitia aliquam totam veritatis voluptatibus exercitationem. Nihil impedit quasi quae iure.', '2024-08-13 12:06:55', '2024-08-13 12:06:55'),
(22, 'Cassandre Bins', 'archibald31@batz.com', 'Inventore sint dolor necessitatibus laudantium fugit. Repellendus aut aut atque.', '2024-08-13 12:06:55', '2024-08-13 12:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Photo` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `Title`, `Photo`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'البرمجة من الصفر', 'images/photo66b9be577569b.jpg', 'نقوم بتحويل فكرتك إلى موقع إلكتروني او تطبيق جوال مع سكريبت مبرمج من الصفر.', 0, '2024-08-12 04:48:39', '2024-08-12 04:48:39'),
(2, 'سكريبت الجمعيات الخيرية', 'images/photo66b9be8e38126.jpg', 'سكريبت متكامل لمواقع الجمعيات الخيرية وفق ضوابط المركز السعودي للحوكمة.', 0, '2024-08-12 04:49:34', '2024-08-12 04:49:34'),
(3, 'برنامج قمة للنداء الآلي', 'images/photo66b9bed8d7b6b.jpg', 'هو نظام تبليغ عن الحالات الطارئة للمنشآت الصحية أو غيرها من الأماكن التي تحتاج سرعة استجابة يتم النداء عن طريق :\r\n* السماعات الداخلية للمنشأة\r\n* الاتصال المباشر بالفريق المناوب\r\n* الرسائل النصية\r\nمع إمكانية التعديل الكامل في شفرات نداء الطوارئ', 0, '2024-08-12 04:50:48', '2024-08-12 04:50:48'),
(4, 'برنامج قمة لنقاط البيع', 'images/photo66b9bf21b766d.jpg', '* لا يحتاج جــــــهاز بمواصفات عالية\r\n* يعمل على الجوال\r\n* قاعدة بيانات محمية مرفوعة على الشبكة\r\n* نسخ احتياطي كل 24 ساعه', 0, '2024-08-12 04:52:01', '2024-08-12 04:52:01'),
(5, 'منصة بانوراما المتكاملة للأندية الرياضية', 'images/photo66b9bf5b3541a.jpg', 'تقدم بانوراما القصيم للبرمجة منصة متكاملة لإدارة الأندية الرياضية تشتمل على الآتي :\r\n* موقع الكتروني\r\n* تطبيقين جوال للموقع ايفون و اندرويد\r\n* متجر الكتروني\r\n* تطبيقين جوال للمتجر ايفون و اندرويد\r\n* نظام المراسلات الإلكترونية\r\n* منصة تذاكر', 0, '2024-08-12 04:52:59', '2024-08-12 04:52:59'),
(6, 'نظام قمة للمحاسبة', 'images/photo66b9bf968eba6.jpg', 'هو نظام يمكن مكاتب المحاسبة من ادارة جميع اعمالها مثل :\r\n* الحسابات\r\n* القيود اليومية\r\n* ميزان المراجعة\r\n* القوائم المالية\r\nوغيرها من المهام المحاسبية', 0, '2024-08-12 04:53:58', '2024-08-12 04:53:58'),
(7, 'نظام قمة للمحاماة', 'images/photo66b9c053820ce.jpg', 'هو نظام يمكن مكاتب المحاماة من ادارة جميع اعمالها مثل :\r\n* تقديم الدعاوي\r\n* ادارة المحاميين و توكيل القضايا لهم\r\n* خط سير لمتابعة كل قضية', 0, '2024-08-12 04:57:07', '2024-08-12 04:57:07'),
(8, 'منصة بانوراما لإدارة المشاريع الهندسية', 'images/photo66b9c09503725.jpg', 'تقدم بانوراما القصيم للبرمجه منصة متكاملة لإدارة المكاتب الهندسيه الكبيره تشتمل على الآتي :\r\n* خط سير كامل للمشاريع الهندسية بكامل تفاصيلها\r\n* ادارة الموظفين و اجازاتهم و رواتبهم واقاماتهم\r\n* نظام اشعارات مخصص لكل بند من البنود اعلاه\r\n* ادارة السجلات و تراخيص المحلات\r\n* ادارة الموارد البشرية\r\n* ادارة متكاملة لسيارات المكتب الهندسي', 0, '2024-08-12 04:58:13', '2024-08-12 04:58:13'),
(9, 'مستشفى بريدة المركزي', 'images/photo66b9c0ce4cc13.jpg', 'صرح طبي عريق بالقصيم منطقة بريدة أنجز مستشفى بريدة المركزي أحد مكونات تجمع القصيم الصحي , أكثر من 12 ألف عملية جراحية حتى نهاية الربع الثالث \" يناير- سبتمبر\" خلال 9 أشهر ، من العام الحالي 2023م ، توزعت على مختلف الأقسام بالمستشفى', 1, '2024-08-12 04:59:10', '2024-08-12 04:59:10'),
(10, 'أركال للاستشارات الهندسية', 'images/photo66b9c135df838.jpg', 'أركال للاستشارات الهندسية المتخصص في تصميم المخططات المعمارية بأحدث الأساليب العصرية وتصميم المخططات الإنشائية تماشيا مع الأكواد العالمية بالإضافة لجميع الأعمال المساحية والكروكيات التنظيمية وأعمال مكافحة الحريق والأمن والسلامة.', 1, '2024-08-12 05:00:54', '2024-08-12 05:00:54'),
(11, 'نادي الرائد الرياضي', 'images/photo66b9c16f2301e.jpg', 'رؤيتنا أن نكون ناديًا رائدًا يعزز النمو المستدام في المجال الرياضي محلياً ودولياً ورسالتنا توفير بيئة رياضية محفّزة في مختلف الألعاب الرياضية، وخلق بيئة جاذبة للاستثمار، و تفعيل المسؤولية الاجتماعية، وتعزيز الاستدامة المهنية والمالية وذلك لتحقيق تطلعات الشركاء والتوجهات المستقبلية للمملكة.', 1, '2024-08-12 05:01:51', '2024-08-12 05:01:51'),
(12, 'مخابز وحلويات الأرياف', 'images/photo66b9c1b8034a3.jpg', 'مخابز وحلويات الأرياف.. 40 عاماً من التميز والنجاح 11 فرعاً حول المملكة تقدم أفضل المنتجات\r\nبدأت قصة شركة مخابر وحلويات الأرياف عام 1985 ميلادي على يد المؤسس رجل الأعمال فهد المحيميد، من حلم إلى كيان عريق يملك خبرة ممتدة ومحفوفة بالعراقة والأصالة، كانت هذه العلامة التجارية شريكة في الكثير من اللحظات السعيدة للمجتمع مما جعل لهذه العلامة ولاء عاليا من قبل عملائها، حتى أصبحت لا تكتمل الأفراح لسنوات طويلة إلا بصحبة منتجات مخابز وحلويات الأرياف، وكان لدى المؤسس الأستاذ فهد المحيميد بعد نظر في استثماره، حيث حرص على أن لا يخدم قطاعاً واحداً فقط، بل قدم منتجات نوعية في قطاعات متعددة مثل:\r\n* الحلويات الشرقية من الكنافة والبقلاوة وغيرها.\r\n* الحلويات الغربية من الكعكات الفاخرة، والكثير من الوصفات المبتكرة والمستوحاة من المطبخ الأوروبي وغيرها.\r\n* الشوكولاتة الفاخرة بأعلى مستوى وألذ حشوة.\r\n* المعجنات والمقليات الطازجة، والمخبوزات التي هي خيار دائم لأصحاب المنازل.', 1, '2024-08-12 05:03:04', '2024-08-12 05:03:04'),
(13, 'النادي العربي', 'images/photo66b9c1dace130.jpg', 'النادي العربي الرياضي بعنيزة, في محافظة عنيزة بمنطقة القصيم وسط المملكة العربية السعودية تأسس سنة 1958, ويحمل النادي شعارا باللون الأحمر والأبيض. يُلقب النادي العربي بفارس عنيزة، وهو نادي رياضي يضم العديد من الألعاب الرياضية أبرزها كرة القدم وكرة اليد وكرة السلة. ويقع مقر النادي في محافظة عنيزة بمنطقة القصيم.', 1, '2024-08-12 05:03:38', '2024-08-12 05:03:38'),
(14, 'نادي الصقر', 'images/photo66b9c21393c98.jpg', 'تأسس نادي الصقر عام 1401هـ على يد مجموعة من اهالي مركز البصر وحينها تم ترشيح الاستاذ عبد العزيز بن عبد الرحمن السويد كأول رئيس للنادي, ثم تعاقب على ادارة النادي احد عشر رئيسا كان اخرهم الرئيس الحالي الاستاذ فهد بن عبد العزيز المحيميد. حقق النادي اول بطولاته على مستوى منطقة القصيم العام 1432هـ وفي العام 1442هـ حقق النادي ذات البطولة للمرة الثانية . وفي نفس العام حقق نادي الصقر تاج بطولاته : درع المملكة العربية السعودية الاندية الدرجة الثالثة, بقيادة رئيس النادي الاستاذ فهد بن عبدالعزيز المحيميد, وعلى اثرها تأهل لأول مرة في تاريخه لدوري الدرجة الثانية لكرة القدم .', 1, '2024-08-12 05:04:35', '2024-08-12 05:04:35'),
(15, 'نادي السر', 'images/photo66b9c25c038ba.jpg', 'نسعى بنادي السر الرياضي للتميز الرياضي والإداري عبر عمل مؤسسي لتحقيق أهدافنا وطموحاتنا التي تلبي تطلعات أصحاب المصلحة.\r\nوأن نكون متميزين في مختلف المجالات الرياضية ونموذجاً في التطوير المؤسسي\r\nالتميز روح الفريق الاستدامة الشراكة الشفافية التمكين\r\nولتحقيق التميز المؤسسي تحسين المنافسة الرياضية تعزيز الاستدامة المالية زيادة مشجعي النادي تحسين البنية تفعيل التكامل و الشراكات المجتمعية', 1, '2024-08-12 05:05:48', '2024-08-12 05:05:48'),
(16, 'نادي التقدم', 'images/photo66b9c30062f76.jpg', 'كانت بدايات النادي بسيطة باجتهادات أهالي المذنب في عام 1968م، حيث تولى رئاسته إدارته بداح البداح - رحمه الله تعالى -حتى جاءت الموافقة الكريمة على اعتماد نادي التقدم الرياضي في محافظة المذنب لممارسة كافة أنشطته الرياضية والثقافية والاجتماعية عام 1972 م ويتولى رئاسة مجلس إدارته عثمان بن محمد الدخيل - رحمه الله تعالى - وتتعاقب بعده الإدارات لوقتنا الحالي.', 1, '2024-08-12 05:08:32', '2024-08-12 05:08:32'),
(17, 'حاضنة الجمعيات', 'images/photo66b9c336bab4a.jpg', 'حاضنة للجمعيات الأهلية الناشئة هدفها دراسة الاحتياجات بمنطقة القصيم ودعم الافكار ورعايتها ودعم الجمعيات من خلال سبل الاستدامة المالية وتنفيذ افكارها، وحل مشكلة الصعوبات والعوائق التي تواجهها، وكيفية حلها ، ومعرفة الاحتياجات بهدف مساعدتها لتأسيس هذه الجمعية.', 1, '2024-08-12 05:09:26', '2024-08-12 05:09:26'),
(18, 'كليات عنيزة', 'images/photo66b9c367d1563.jpg', 'تعد كليات عنيزة من الكليات الناشئة في المملكة؛ إذ انطلقت مسيرتها في العام الجامعي 1437/1436 ه بدعم سخي من حكومة خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز آل سعود، وسمو ولي عهده الأمين، حفظهما الله، ورعاية كريمة من وزارة التعليم، تحقيقا للتوجهات المستقبلية للمملكة في مجال التعليم، والبحث العلمي؛ لتوفير تعليم متميز لأبناء المملكة وبناتها في منطقة القصيم.', 1, '2024-08-12 05:10:15', '2024-08-12 05:10:15'),
(19, 'جمعية تجهيز', 'images/photo66b9c38dab0fb.jpg', 'جمعية خيرية تهتم بشؤون المسلم بعد موته، وتوعية المجتمع بأحكام الجنائز من خلال تقديم عمل خيري متقن للمجتمع من خلال الاهتمام برعاية شؤون الموتى، تجهيزا، وتكفينا، ودفنا، وتدريب وتأهيل المغسلين، وتوعية المجتمع بالمفهوم الشرعي للتعامل مع الجنائز.', 1, '2024-08-12 05:10:53', '2024-08-12 05:10:53'),
(20, 'مكتب المحامي عبدالرحمن الجمعة', 'images/photo66b9c3bfae280.jpg', 'مكتب عبدالرحمن محمد الجمعة محامون ومستشارون وموثقون هو مكتب مرخص له بمزاولة المحاماة بموجب ترخيص المحاماة رقم 39389 وتاريخ 1/7/1439 وترخيص التوثيق رقم 1767 /40 وتاريخ 1/9/1440هـ الصادرين من وزارة العدل بالمملكة العربية السعودية.', 1, '2024-08-12 05:11:43', '2024-08-12 05:11:43'),
(21, 'مكتب القصيم للزواج', 'images/photo66b9c40d984f3.jpg', 'مكتب القصيم للزواج القصيم بريده حي السالمية شرق مسجد الجارالله الجامع المكتب له حوالي 16سنه زوج كثير من الرجال على مستوى المملكة دخولك وتعرفك بالمكتب انت بالطريق الصحيح وانتبه لنفسك من المتطفلين على الزواج في برامج التواصل الذين ليسوا مختصين بالزواج وإنما هدفهم اخذ أموال الناس بالباطل المكتب معروف لدى الجميع ومنهم الجهات المختصة .', 1, '2024-08-12 05:13:01', '2024-08-12 05:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_09_075816_create_contents_table', 1),
(5, '2024_08_13_112214_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Reem Alayed', 'rAlayed48@gmail.com', NULL, '$2y$12$.l5ibmSzd9YACQRrUdMSgeyAfBBcDz5MGZ0mEInvw7zBOiNcaW0dW', NULL, '2024-08-13 07:11:37', '2024-08-13 07:11:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 27 oct. 2022 à 20:14
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `larawork`
--

-- --------------------------------------------------------

--
-- Structure de la table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) UNSIGNED NOT NULL,
  `to` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `conversations`
--

INSERT INTO `conversations` (`id`, `from`, `to`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 1, 13, 2, '2022-10-06 09:45:58', '2022-10-06 09:45:58');

-- --------------------------------------------------------

--
-- Structure de la table `cover_letters`
--

CREATE TABLE `cover_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cover_letters`
--

INSERT INTO `cover_letters` (`id`, `proposal_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'HAHA', '2022-09-04 09:57:42', '2022-09-04 09:57:42'),
(2, 4, 'yes', '2022-09-04 10:03:08', '2022-09-04 10:03:08'),
(4, 6, 'je suis fort', '2022-10-06 09:45:09', '2022-10-06 09:45:09'),
(5, 7, 'Bonjour!! je suis interessé', '2022-10-23 11:14:07', '2022-10-23 11:14:07');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`) VALUES
('10608f58-8727-4ff9-a18d-3f2cbab67fd6', 'Nombre de projet = 3', '2022-10-04', '2022-10-06'),
('810c21fd-5c54-4fc2-8bdc-cf7b3770858d', 'projet =5', '2022-09-06', '2022-09-07'),
('f880ce01-bfc0-4a3a-95c1-30e70d445547', 'signature', '2022-09-13', '2022-09-15');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE `historiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evenement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utisateur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiques`
--

INSERT INTO `historiques` (`id`, `evenement`, `utisateur`, `created_at`, `updated_at`) VALUES
(1, 'Ajout Jobs', 'client@gmail.com', '2022-09-01 11:35:11', '2022-09-01 11:35:11'),
(2, 'Delete Jobs', 'client@gmail.com', '2022-09-01 11:35:23', '2022-09-01 11:35:23'),
(3, 'Ajout Jobs', 'client@gmail.com', '2022-09-01 11:36:05', '2022-09-01 11:36:05'),
(4, 'Edit Jobs', 'client@gmail.com', '2022-09-01 16:14:41', '2022-09-01 16:14:41'),
(5, 'Edit Jobs', 'client@gmail.com', '2022-09-01 16:25:38', '2022-09-01 16:25:38'),
(6, 'Edit Jobs', 'client@gmail.com', '2022-09-01 16:25:55', '2022-09-01 16:25:55'),
(7, 'Edit Jobs', 'client@gmail.com', '2022-09-01 16:26:15', '2022-09-01 16:26:15'),
(8, 'Edit Jobs', 'client@gmail.com', '2022-09-20 11:11:55', '2022-09-20 11:11:55'),
(9, 'Edit Jobs', 'client@gmail.com', '2022-09-20 19:36:22', '2022-09-20 19:36:22'),
(10, 'Delete Jobs', 'client@gmail.com', '2022-09-22 06:23:34', '2022-09-22 06:23:34'),
(11, 'Delete Jobs', 'client@gmail.com', '2022-09-22 06:23:36', '2022-09-22 06:23:36'),
(23, 'Edit Jobs', 'client@gmail.com', '2022-09-22 07:10:00', '2022-09-22 07:10:00'),
(24, 'Edit Jobs', 'client@gmail.com', '2022-09-22 07:10:37', '2022-09-22 07:10:37'),
(25, 'Edit Jobs', 'client@gmail.com', '2022-09-22 07:28:15', '2022-09-22 07:28:15'),
(26, 'Edit Jobs', 'client@gmail.com', '2022-09-22 08:07:13', '2022-09-22 08:07:13'),
(27, 'Ajout Jobs', 'elyahfrisco7@gmail.com', '2022-10-27 13:34:29', '2022-10-27 13:34:29'),
(28, 'Ajout Jobs', 'elyahfrisco7@gmail.com', '2022-10-27 13:39:56', '2022-10-27 13:39:56'),
(29, 'Ajout Jobs', 'elyahfrisco7@gmail.com', '2022-10-27 15:59:31', '2022-10-27 15:59:31'),
(30, 'Delete Jobs', 'elyahfrisco7@gmail.com', '2022-10-27 15:59:34', '2022-10-27 15:59:34'),
(31, 'Delete Jobs', 'elyahfrisco7@gmail.com', '2022-10-27 15:59:34', '2022-10-27 15:59:34'),
(32, 'Ajout Jobs', 'elyahfrisco7@gmail.com', '2022-10-27 16:11:09', '2022-10-27 16:11:09'),
(33, 'Delete Jobs', 'elyahfrisco7@gmail.com', '2022-10-27 16:11:12', '2022-10-27 16:11:12');

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `id` int(11) DEFAULT NULL,
  `mission` mediumtext NOT NULL,
  `value` mediumtext NOT NULL,
  `consulting` mediumtext NOT NULL,
  `support` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`id`, `mission`, `value`, `consulting`, `support`) VALUES
(1, 'L’entreprise SN CORP est une grande entreprise de HEDGE FUND basé sur la stratégie long/short Fund qui est un fond de placement à caractère spéculatif ouvert à un nombre limité d\'investisseurs à la recherche d’un rendement élevé.', 'L\'entreprise SN CORP vous offre aussi differentes opportunités de travail pour cette grande entreprise et  propose aussi divers missions freelance accessible sur cette plateforme gratuit et zéro engagement', 'L\'entreprise SN CORP se situe à Londres, Numéro D\'enregistrement : 13289000 Adresse : 71-75 Shelton Street, Covent Garden, London, WC2H 9JQ, UNITED KINGDOM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis des Accusamus ratione cupiditate veritatis deserunt!,fri');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `status`, `attachment`, `price`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Redacteur web', 'Charger de gerer les contenus des pages web', 1, 'attachment/U7saetsG0kloMwgHa89tEEqebDtoLOQaTyJYfy59.png', 200, 1, '2022-09-01 11:36:05', '2022-09-22 06:45:38'),
(15, 'consultant sécurité informatique', 'est chargé de veiller à la sécurité des données', 1, 'attachment/U7saetsG0kloMwgHa89tEEqebDtoLOQaTyJYfy59.png', 500, 1, NULL, NULL),
(17, 'Consultant Marketing', 'Élaborer des stratégies Marketing de l’entreprise', 1, 'attachment/JmBgnH2OMxpRQsRErOAJ4la1NNn1JYuWaRZbI5FM.pdf', 12000, 16, '2022-10-27 13:34:29', '2022-10-27 13:34:29'),
(18, 'Designer UI/UX', 'Elaboration des maquettes sous Figma', 1, 'attachment/Qjh8mB3FK8D7oK36TJRjcufy7GDo7kiQCso4zJQe.pdf', 700, 16, '2022-10-27 13:39:56', '2022-10-27 13:39:56');

-- --------------------------------------------------------

--
-- Structure de la table `job_user`
--

CREATE TABLE `job_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `job_user`
--

INSERT INTO `job_user` (`id`, `job_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 2, 3, NULL, NULL),
(5, 2, 1, NULL, NULL),
(8, 2, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `conversation_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `conversation_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Bonjour, J\'ai validé votre offre.', 0, '2022-10-06 09:45:58', '2022-10-06 09:45:58'),
(2, 1, 1, 'hh', 0, '2022-10-06 09:46:17', '2022-10-06 09:46:17'),
(3, 13, 1, 'Salut', 0, '2022-10-06 09:47:08', '2022-10-06 09:47:08'),
(4, 1, 1, 'gbyj hbnj', 0, '2022-10-26 05:52:52', '2022-10-26 05:52:52');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_05_13_080916_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_05_14_073225_create_jobs_table', 1),
(8, '2022_05_16_134430_create_job_user_table', 1),
(9, '2022_05_17_115408_create_proposals_table', 1),
(10, '2022_05_17_120253_create_cover_letters_table', 1),
(11, '2022_05_17_161521_create_conversations_table', 1),
(12, '2022_05_17_161621_create_messages_table', 1),
(13, '2022_09_01_121840_create_historiques_table', 1),
(14, '2022_09_15_123428_create_events_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `validated` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `proposals`
--

INSERT INTO `proposals` (`id`, `user_id`, `job_id`, `validated`, `created_at`, `updated_at`) VALUES
(3, 4, 2, 0, '2022-09-04 09:57:37', '2022-09-04 09:57:37'),
(4, 3, 2, 0, '2022-09-04 10:03:02', '2022-09-04 10:03:02'),
(6, 13, 2, 1, '2022-10-06 09:45:03', '2022-10-06 09:45:58'),
(7, 3, 15, 0, '2022-10-23 11:14:01', '2022-10-23 11:14:01');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'freelance', NULL, NULL),
(2, 'client', NULL, NULL),
(3, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'client', 'client@gmail.com', NULL, '$2y$10$ndvOgxFfYspxnYTndNTRyOSwfbgHYrtkQF04a7ccqAPaEJwWolVXa', NULL, NULL, NULL, 2, NULL, '2022-09-01 11:34:51', '2022-09-01 11:34:51'),
(3, 'freelances', 'freelance@gmail.com', NULL, '$2y$10$Q5Jtu5Bs/UkJykF0MRxMyeNLcrDNQVBSdKcwMKpjs7OqFpRAcqybi', NULL, NULL, NULL, 1, NULL, '2022-09-04 09:11:36', '2022-09-20 18:36:53'),
(4, 'freelance2', 'freelance2@gmail.com', NULL, '$2y$10$1pBVh94aTO4tYKOPRrHsTOxCcn3mdcdXaqII6LJRzzbi8eIo3/6He', NULL, NULL, NULL, 1, NULL, '2022-09-04 09:56:52', '2022-09-20 19:09:07'),
(5, 'sncorp', 'sncorpcompany@gmail.com', NULL, '$2y$10$RXpEHhCTil6eYSSJ3Yd5je94pud59gRNAi9Qpz2xwlNmIecuVI1wK', NULL, NULL, NULL, 3, NULL, '2022-09-04 10:00:53', '2022-09-04 10:00:53'),
(12, 'yael', 'yael@gmail.com', NULL, '$2y$10$OZAtGW2V9mq4J0oGBf38rea6Cj.66RcbVnE1ScOSP3XOzaMZoFDFi', NULL, NULL, NULL, 1, NULL, '2022-10-03 14:53:47', '2022-10-03 14:53:47'),
(13, 'angelo', 'angelo@gmail.com', NULL, '$2y$10$nbCbiwqZcYqCukuT6zfXouoPfWC./aJfk2d9Pu7hsIYJ8hSnnrYpu', NULL, NULL, NULL, 1, NULL, '2022-10-06 09:44:16', '2022-10-06 09:44:16'),
(16, 'Frisco', 'elyahfrisco7@gmail.com', NULL, '$2y$10$j2Qmb7A0x3xbGzSnlf/CourbJCTbmovWblIFBoRQxEkfuSViaGTdS', NULL, NULL, NULL, 2, NULL, '2022-10-27 08:36:25', '2022-10-27 08:37:24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversations_from_foreign` (`from`),
  ADD KEY `conversations_to_foreign` (`to`),
  ADD KEY `conversations_job_id_foreign` (`job_id`);

--
-- Index pour la table `cover_letters`
--
ALTER TABLE `cover_letters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cover_letters_proposal_id_foreign` (`proposal_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`);

--
-- Index pour la table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_user_job_id_foreign` (`job_id`),
  ADD KEY `job_user_user_id_foreign` (`user_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`),
  ADD KEY `messages_conversation_id_foreign` (`conversation_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposals_user_id_foreign` (`user_id`),
  ADD KEY `proposals_job_id_foreign` (`job_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cover_letters`
--
ALTER TABLE `cover_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_from_foreign` FOREIGN KEY (`from`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `conversations_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `conversations_to_foreign` FOREIGN KEY (`to`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `cover_letters`
--
ALTER TABLE `cover_letters`
  ADD CONSTRAINT `cover_letters_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`);

--
-- Contraintes pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `job_user`
--
ALTER TABLE `job_user`
  ADD CONSTRAINT `job_user_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `job_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`),
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `proposals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

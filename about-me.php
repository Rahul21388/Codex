<?php
  // Optional: set a page title for your head include to consume
  $pageTitle = $pageTitle ?? 'About Me';
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    // Standard head include (expected to contain <head> with meta, title, Tailwind, etc.)
    // Adjust the path if your includes live elsewhere
    $headIncludePath = __DIR__ . '/includes/head.php';
    if (file_exists($headIncludePath)) {
      include $headIncludePath;
    } else {
      // Minimal fallback head in case the include is missing
      echo '<head>';
      echo '<meta charset="utf-8">';
      echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
      echo '<title>' . htmlspecialchars($pageTitle) . '</title>';
      // Tailwind via CDN fallback; remove if your head include already loads Tailwind
      echo '<script src="https://cdn.tailwindcss.com"></script>';
      echo '</head>';
    }
  ?>
  <body class="bg-gray-50 text-gray-900 antialiased">
    <?php
      // Standard site header / navigation
      $headerIncludePath = __DIR__ . '/includes/header.php';
      if (file_exists($headerIncludePath)) {
        include $headerIncludePath;
      }
    ?>

    <main id="main" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">
      <header class="mb-10">
        <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900">About Me</h1>
        <p class="mt-3 max-w-2xl text-base text-gray-600">A short introduction and background.</p>
      </header>

      <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        <div class="lg:col-span-1">
          <div class="aspect-square w-full max-w-xs rounded-xl overflow-hidden bg-white shadow ring-1 ring-gray-200 flex items-center justify-center">
            <span class="text-gray-400">Your Photo</span>
          </div>
        </div>
        <div class="lg:col-span-2 space-y-6">
          <div class="prose prose-gray max-w-none">
            <p>
              Welcome! I'm <strong>Your Name</strong>. Replace this text with your story, what you do,
              what you care about, and what you're working on.
            </p>
            <p>
              You can use this page to highlight your skills, experience, and interests. Add links,
              images, and anything else that helps people get to know you.
            </p>
          </div>

          <div>
            <h2 class="text-xl font-semibold text-gray-900">Highlights</h2>
            <ul class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
              <li class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                <span class="block text-sm font-medium text-gray-900">Expertise</span>
                <span class="mt-1 block text-sm text-gray-600">Add areas of focus</span>
              </li>
              <li class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                <span class="block text-sm font-medium text-gray-900">Projects</span>
                <span class="mt-1 block text-sm text-gray-600">Link to featured work</span>
              </li>
              <li class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                <span class="block text-sm font-medium text-gray-900">Location</span>
                <span class="mt-1 block text-sm text-gray-600">Where you're based</span>
              </li>
              <li class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                <span class="block text-sm font-medium text-gray-900">Contact</span>
                <span class="mt-1 block text-sm text-gray-600">How to reach you</span>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

    <?php
      // Standard site footer
      $footerIncludePath = __DIR__ . '/includes/footer.php';
      if (file_exists($footerIncludePath)) {
        include $footerIncludePath;
      }
    ?>
  </body>
  </html>


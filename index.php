<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Smart Plant Care</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body class="min-h-screen p-4 sm:p-8 bg-gray-50">
  <div class="max-w-4xl mx-auto">
    <!-- Header -->
    <header class="text-center mb-8 p-4 bg-white rounded-xl shadow-lg border-b-4 border-green-500">
      <h1 class="text-4xl font-extrabold text-green-700">My Plant Care Dashboard</h1>
    </header>

    <!-- Add New Plant Form -->
    <div class="bg-white p-6 mb-8 rounded-xl shadow-xl border border-gray-200">
      <h2 class="text-2xl font-semibold text-green-600 mb-4 border-b pb-2">Add New Plant</h2>

      <form id="add-plant-form" action="add_plant.php" method="POST"
        class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-end">

        <div>
          <label for="plant-name" class="block text-sm font-medium text-gray-700">Plant Name</label>
          <input id="plant-name" name="name" type="text" required
            placeholder="Fiddle Leaf Fig"
            class="border border-gray-300 p-2 rounded-lg w-full">
        </div>

        <div>
          <label for="watering-frequency" class="block text-sm font-medium text-gray-700">
            Watering Frequency (days)
          </label>
          <input id="watering-frequency" name="frequency" type="number" value="7" required min="1"
            class="border border-gray-300 p-2 rounded-lg w-full">
        </div>

        <div>
          <button type="submit"
            class="bg-green-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-green-700 w-full">
            Track Plant
          </button>
        </div>
      </form>
    </div>

    <!-- Plant List Section -->
    <div class="bg-white p-4 mb-6 rounded-xl shadow-sm border border-gray-100">
      <h3 class="text-lg font-semibold text-gray-700 mb-3">My Plants</h3>
      <!-- Future: List plants here dynamically -->
    </div>
  </div>

  <!-- Optional JS section for future AJAX / form enhancements -->
  <script>
    const form = document.getElementById('add-plant-form');
    form.addEventListener('submit', function(e) {
      // Currently PHP handles submission and popup
      // You can add AJAX here in future if desired
    });
  </script>
</body>
</html>

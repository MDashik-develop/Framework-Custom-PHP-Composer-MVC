<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Framework - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<!-- <body>
   <h1>this is home</h1>
   <pre>
      <?php
         echo $data[0]['name'];
         echo '<br/>';
         echo $test ;
      ?>
      <br/>
   </pre> -->

   <?php
// Navigation Component
function navigation() {
    ?>
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <div class="text-2xl font-bold text-indigo-600">
                        <i class="fas fa-code mr-2"></i>
                        CustomPHP
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="" class="text-gray-600 hover:text-indigo-600 font-medium">Documentation</a>
                        <a href="" class="text-gray-600 hover:text-indigo-600 font-medium">Features</a>
                        <a href="" class="text-gray-600 hover:text-indigo-600 font-medium">Examples</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <?php if(isset($_SESSION['login_user_id'])): ?>
                        <a href="/dashboard" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                            Dashboard
                        </a>
                        <a href="" class="text-gray-600 hover:text-indigo-600">
                            Logout
                        </a>
                    <?php else: ?>
                        <a href="/login" class="text-gray-600 hover:text-indigo-600 font-medium">
                            Login
                        </a>
                        <a href="/login/demo" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                            Get Started
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <?php
}

// Hero Section
function heroSection() {
    ?>
    <section class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Build Amazing Web Applications
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-indigo-100 max-w-3xl mx-auto">
                A beautiful, modern PHP framework for building powerful web applications with elegant syntax.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="/login/demo" class="bg-white text-indigo-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition duration-300">
                    <i class="fas fa-rocket mr-2"></i>Get Started
                </a>
                <a href="/docs" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-indigo-600 transition duration-300">
                    <i class="fas fa-book mr-2"></i>Documentation
                </a>
            </div>
        </div>
    </section>
    <?php
}

// Features Section
function featuresSection() {
    $features = [
        [
            'icon' => 'fas fa-bolt',
            'title' => 'Lightning Fast',
            'description' => 'Built for performance with optimized code and efficient routing system.'
        ],
        [
            'icon' => 'fas fa-shield-alt',
            'title' => 'Secure',
            'description' => 'Built-in security features including middleware protection and SQL injection prevention.'
        ],
        [
            'icon' => 'fas fa-code',
            'title' => 'Elegant Syntax',
            'description' => 'Clean, readable code that makes development enjoyable and maintainable.'
        ],
        [
            'icon' => 'fas fa-database',
            'title' => 'Database Support',
            'description' => 'Support for multiple databases including MySQL, SQLite, and PostgreSQL.'
        ],
        [
            'icon' => 'fas fa-mobile-alt',
            'title' => 'Responsive',
            'description' => 'Built with mobile-first approach and responsive design principles.'
        ],
        [
            'icon' => 'fas fa-plug',
            'title' => 'Extensible',
            'description' => 'Easy to extend with custom packages and middleware.'
        ]
    ];
    ?>
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Amazing Features</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Everything you need to build modern web applications with PHP
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach($features as $feature): ?>
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition duration-300">
                    <div class="text-indigo-600 text-3xl mb-4">
                        <i class="<?php echo $feature['icon']; ?>"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                        <?php echo $feature['title']; ?>
                    </h3>
                    <p class="text-gray-600">
                        <?php echo $feature['description']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

// Code Examples Section
function codeExamples() {
    ?>
    <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Elegant Code Examples</h2>
                <p class="text-xl text-gray-300">See how easy it is to build with our framework</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Routing Example -->
                <div class="bg-gray-800 rounded-lg overflow-hidden">
                    <div class="bg-gray-700 px-4 py-2">
                        <span class="text-gray-300">routes/web.php</span>
                    </div>
                    <div class="p-6">
                        <pre class="text-green-400 text-sm">
                           <code style="text-wrap: auto;">
Route::get('/', 'HomeController', 'index');
Route::get('login', 'LoginController', 'login');
Route::get('dashboard', 'UserController', 'dashboard', [Auth::class, 'auth']);
                           </code>
                        </pre>
                    </div>
                </div>

                <!-- Controller Example -->
                <div class="bg-gray-800 rounded-lg overflow-hidden">
                    <div class="bg-gray-700 px-4 py-2">
                        <span class="text-gray-300">app/Controller/UserController.php</span>
                    </div>
                    <div class="p-6">
                        <pre class="text-green-400 text-sm">
                           <code style="text-wrap: auto;">
class UserController {
   public function index(){
      $data = [
         0 => ['name' => 'hoem', 'url' => '/'],
         1 => ['name' => 'about', 'url' => 'about']
      ];
      $test = 'test'; // also sql here
      view('home', compact('data', 'test'));
   }

   public function redirect(){
      redirect('/');
   }
}
                           </code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

// Footer
function footer() {
    ?>
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">CustomPHP</h3>
                    <p class="text-gray-400">
                        A modern PHP framework for building amazing web applications.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/docs" class="hover:text-white">Documentation</a></li>
                        <li><a href="/examples" class="hover:text-white">Examples</a></li>
                        <li><a href="/tutorials" class="hover:text-white">Tutorials</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Community</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">GitHub</a></li>
                        <li><a href="#" class="hover:text-white">Forums</a></li>
                        <li><a href="#" class="hover:text-white">Discord</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Features</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Routing</a></li>
                        <li><a href="#" class="hover:text-white">Middleware</a></li>
                        <li><a href="#" class="hover:text-white">Database</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 CustomPHP Framework. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <?php
}
?>

<!-- Main Content -->
<div>
    <?php
    navigation();
    heroSection();
    featuresSection();
    codeExamples();
    footer();
    ?>
</div>
</body>
</html>
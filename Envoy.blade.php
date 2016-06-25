@setup
    $server = 'seguritico.zapto.org';
    $branch = 'master';
    $user = get_current_user();
@endsetup

@servers(['web' => "$user@$server"])

@task('deploy', ['on' => 'web'])
    cd /home/Sites/seguritico
    git pull origin $branch
    composer install
    php artisan migrate --force
@endtask

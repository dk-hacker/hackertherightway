@servers(['web' => 'deploy@104.236.186.206'])

@task('deploy')
    cd /home/deploy/projects/hackertherightway
    git pull origin master
@endtask

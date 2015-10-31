@servers(['web' => 'deploy@104.236.186.206 -p 22800'])

@task('deploy', ['on' => 'web'])
    cd /home/deploy/projects/hackertherightway
    git pull origin master
@endtask

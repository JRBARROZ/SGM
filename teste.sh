#!/bin/bash
git filter-branch -f --commit-filter 'if [ "$GIT_AUTHOR_NAME" = "Wolaci" ];
then export GIT_AUTHOR_NAME="Murielson"; export GIT_AUTHOR_EMAIL=jhonsnoow32@gmail.com;
fi; git commit-tree "$@"';

git filter-branch -f --commit-filter 'if [ "$GIT_COMMITTER_NAME" = "Wolaci" ];
then export GIT_COMMITTER_NAME="Murielson"; export GIT_COMMITTER_EMAIL=jhonsnoow32@gmail.com;
fi; git commit-tree "$@"'

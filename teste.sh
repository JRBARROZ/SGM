#!/bin/bash
git filter-branch -f --commit-filter 'if [ "$GIT_AUTHOR_NAME" = "brunomanoel2019" ];
then export GIT_AUTHOR_NAME="majorsilvio"; export GIT_AUTHOR_EMAIL=silvioej@gmail.com;
fi; git commit-tree "$@"';

git filter-branch -f --commit-filter 'if [ "$GIT_COMMITTER_NAME" = "brunomanoel2019" ];
then export GIT_COMMITTER_NAME="majorsilvio"; export GIT_COMMITTER_EMAIL=silvioej@gmail.com;
fi; git commit-tree "$@"'

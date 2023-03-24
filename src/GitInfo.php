<?php

namespace RyanXedi\GitInfo;

class GitInfo
{
    public function branch(): string
    {
        return $this->base()['branch'];
    }

    public function hash(): string
    {
        return $this->base()['hash'];
    }

    protected function base(): array
    {
        if (is_dir(base_path() . '/.git')) {
            $base_path = base_path() . '/.git';

            $contents = file_get_contents($base_path . '/HEAD');
            $branch_name = rtrim(preg_replace("/(.*?\/){2}/", '', $contents));
            $branch_path = $base_path . '/refs/heads/' . $branch_name;

            if (file_exists($branch_path)) {
                $hash = file_get_contents($branch_path);
            } else {
                $hash = $branch_path . ' does not exist';
            }

            return ([
                'branch' => $branch_name,
                'hash' => $hash
            ]);
        } else {
            return ([
                'branch' => '.git folder not found',
                'hash' => '.git folder not found',
            ]);
        }
    }
}

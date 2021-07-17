<?php

return [
    'daemon_connection_failed' => 'デーモンとの通信を試みている間に例外が発生し、HTTP/:code レスポンスコードになりました。この例外はログに記録されています。',
    'node' => [
        'servers_attached' => 'Nodeを削除するには、そのNodeにリンクしているサーバーがない必要があります。',
        'daemon_off_config_updated' => 'デーモンの設定が<strong>更新</strong>されましたが、デーモンの設定ファイルを自動的に更新しようとした際にエラーが発生しました。この変更を適用するには、デーモンの設定ファイル（config.yml）を手動で更新する必要があります。',
    ],
    'allocations' => [
        'server_using' => 'このアロケーションには現在サーバーが割り当てられています。アロケーションを削除できるのは、現在サーバーが割り当てられていない場合のみです。',
        'too_many_ports' => '1つの範囲に1000個以上のポートを一度に追加することは対応していません。',
        'invalid_mapping' => ':portに指定されたマッピングが無効で、処理できませんでした。',
        'cidr_out_of_range' => 'CIDR記法では、/25～/32の間のマスクしか使用できません。',
        'port_out_of_range' => 'アロケーションのポートは、1024以上、65535以下でなければなりません。',
    ],
    'nest' => [
        'delete_has_servers' => 'アクティブなサーバが接続されているネストは、パネルから削除できません。',
        'egg' => [
            'delete_has_servers' => 'アクティブなサーバが接続されているEggは、パネルから削除できません。',
            'invalid_copy_id' => 'スクリプトをコピーするために選択されたEggが存在しないか、スクリプト自体をコピーしています。',
            'must_be_child' => 'このEggの「設定のコピー元」ディレクティブは、選択されたネストの子オプションでなければなりません',
            'has_children' => 'このEggは1つ以上の他のEggの親です。このEggを削除する前にそれらのEggを削除してください。',
        ],
        'variables' => [
            'env_not_unique' => '環境変数:nameは、このEggに固有のものでなければなりません。',
            'reserved_name' => '環境変数:nameは保護されているため、変数に割り当てることはできません。',
            'bad_validation_rule' => '検証ルール「:rule」は、このアプリケーションでは有効なルールではありません。',
        ],
        'importer' => [
            'json_error' => 'JSONファイルを解析しようとしたときにエラーが発生しました: :error.',
            'file_error' => '提供されたJSONファイルは有効ではありませんでした。',
            'invalid_json_provided' => '提供されたJSONファイルは、認識できる形式ではありません。',
        ],
    ],
    'subusers' => [
        'editing_self' => '自分のサブユーザーアカウントの編集は許可されていません。',
        'user_is_owner' => 'サーバーのオーナーをこのサーバーのサブユーザーとして追加することはできません。',
        'subuser_exists' => 'そのメールアドレスを持つユーザーは、このサーバーのサブユーザーとしてすでに割り当てられています。',
    ],
    'databases' => [
        'delete_has_databases' => 'アクティブなデータベースがリンクされているデータベースホストサーバーは削除できません。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '連鎖したタスクの最大インターバル時間は15分です。',
    ],
    'locations' => [
        'has_nodes' => 'アクティブなNodeが接続されているロケーションは削除できません。',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Node #:node</a>のキーの取り消しに失敗しました。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '自動デプロイに指定された要件を満たすNodeが見つかりませんでした。',
        'no_viable_allocations' => '自動デプロイメントに指定された要件を満たすアロケーションが見つかりませんでした。',
    ],
    'api' => [
        'resource_not_found' => '要求されたリソースはこのサーバー上に存在しません。',
    ],
];

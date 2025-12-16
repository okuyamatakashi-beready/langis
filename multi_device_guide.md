# WordPress Multi-Device Sync Guide (MacBook ⇔ Mac mini)

MacBook（現在）とMac mini（2台目）で全く同じ開発環境を再現するための手順です。

## 1. MacBook側での準備（初回のみ）

1.  **リモートリポジトリの作成**
    - GitHubなどで空のリポジトリを作成します。
2.  **リモートの登録とプッシュ**
    - ターミナルで以下のコマンドを実行し、作成したリポジトリを登録・プッシュします。
    ```bash
    git remote add origin [リポジトリのURL]
    git branch -M main
    git push -u origin main
    ```

## 2. Mac mini側でのセットアップ（初回のみ）

Mac miniで作業を開始する際のセットアップ手順です。

### 前提条件
- **SourceTree** がインストールされていること。
- MAMP Pro, Node.js がインストールされていること。

### 手順 (SourceTree使用の場合)

0.  **SSHキーの設定（初回のみ）**
    - Mac miniでターミナルを開き、以下のコマンドを実行して鍵を作成します。
      ```bash
      ssh-keygen -t ed25519 -C "macmini-git" -f ~/.ssh/id_ed25519 -N ""
      ```
    - 作成された鍵（公開鍵）の中身を表示します。
      ```bash
      cat ~/.ssh/id_ed25519.pub
      ```
    - 表示された文字列（`ssh-ed25519 ...` から詳しくコピー）を、GitHubの [Settings > SSH and GPG keys > New SSH key](https://github.com/settings/ssh/new) に登録します。
        - **Title**: Mac mini
        - **Key**: コピーした文字列をペースト

1.  **Clone (クローン)**
    - SourceTreeを開き、「新規...」→「URLからクローン」を選択します。
    - **ソースURL**: GitHub等のリポジトリURLを入力。
        - **重要**: Mac miniでもSSH設定（鍵の作成とGitHubへの登録）が必要です。GitHubから「Permission denied」と言われたら、MacBookと同じように鍵を作って登録してください。
    - **保存先のパス**: `/Users/[ユーザー名]/Sites/langis/wp-content/themes/langis` を指定。
    - 「クローン」を実行します。

2.  **依存関係のインストール**
    - ここだけはターミナルで行う必要があります（SourceTreeの「ターミナルで開く」ボタンが便利です）。
    ```bash
    npm install
    ```

3.  **開発開始**
    ```bash
    npm run dev
    ```

### (参考) ターミナルで行う場合の手順
1.  **リポジトリのクローン**
    ```bash
    cd /Users/[ユーザー名]/Sites/langis/wp-content/themes/
    git clone [リポジトリのURL] langis
    ```
2.  ... (以下同)


3.  **依存関係のインストール**
    - テーマフォルダ内に入り、npmパッケージをインストールします。
    ```bash
    cd langis
    npm install
    ```

4.  **MAMP Proの設定**
    - MacBookと同じドメイン（`langis.test`）でホストを設定します。
    - ドキュメントルートを合わせます。

5.  **開発開始**
    ```bash
    npm run dev
    ```

## 3. 日々の開発フロー (MacBook ⇔ Mac mini)

### 作業を始める時 (Pull)
必ず最初に最新の状態を取り込みます。
```bash
git pull origin main
npm install  # パッケージが増えている可能性があるため
npm run dev
```

### 作業を終える時 (Push)
変更を保存してサーバーにアップロードします。
```bash
git add .
git commit -m "作業内容のメモ"
git push origin main
```

## 注意点：データベースについて
Gitは「ファイル」しか同期しません。「記事データ」「固定ページ」「プラグインの設定」などの**データベースの中身は同期されません**。

- **記事を書いた場合**: Mac miniにも同じ記事を手動で書くか、データベース移行プラグイン（WP Migrateなど）を使ってDBを同期する必要があります。
- **プラグインを入れた場合**: 両方の端末でインストールして有効化する必要があります。

# website-build-template

Webサイト開発用のボイラープレートです。

## インストール

```
npm install
```

## 使い方

開発時は以下のコマンドを実行してください。

```
npm run watch
```

### 説明

* `js`、`scss(css)`ファイルは、`laravel-mix`を通して`/src`ディレクトリのファイルがbuildされます。
* `/dist`配下に生成されたcss、jsはgit内で管理されません。
* src配下で管理されるファイル以外は、`dist`ディレクトリで直接管理します。
  * `.php`ファイルや画像ファイルなどが該当します。


## 選定技術

* [laravel-mix](https://laravel-mix.com/)
<?php
// Inclua os arquivos necessários
include_once("templates/header.php");
include_once("templates/footer.php");
include_once("data/posts.php");
include_once("data/categories.php");
include_once("helpers/url.php");

// Inicie o buffer de saída para capturar o HTML gerado
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drak Blog</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div id="title-container">
            <h1>Drak Blog</h1>
            <p>O seu blog de T.I</p>
        </div>
        <div id="posts-container">
            <?php foreach ($posts as $post) : ?>
                <div class="post-box">
                    <img src="img/<?= $post["img"] ?>" alt="<?= $post["title"] ?>">
                    <h2 class="post-title">
                        <a href="post.php?id=<?= $post["id"] ?>"><?= $post["title"] ?></a>
                    </h2>
                    <p class="post-description"><?= $post["description"] ?></p>
                    <div class="tags-container">
                        <?php foreach ($post["tags"] as $tag) : ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>

<?php
include_once("templates/footer.php");
// Capture o conteúdo do buffer de saída
$htmlContent = ob_get_clean();

// Caminho para o diretório de publicação (ajuste conforme necessário)
$publishDirectory = "/opt/build/repo";

// Nome do arquivo de saída (ajuste conforme necessário)
$outputFileName = "index.html";

// Caminho completo para o arquivo de saída
$outputFilePath = $publishDirectory . "/" . $outputFileName;

// Salvar o conteúdo HTML no arquivo de saída
file_put_contents($outputFilePath, $htmlContent);

// Exibir mensagem de sucesso
echo "Build concluído com sucesso!\n";

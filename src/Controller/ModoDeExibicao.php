<?php

namespace DeboraMind\Portfolio\Controller;

use Doctrine\ORM\EntityManagerInterface;

class ModoDeExibicao
{
    public function hardSkill($repositorio)
    {
        echo "<div id='hardSkill' class='text-center display-5 m-6'>Hard Skills</div>";
        echo "<div id='' class='row col-auto mx-0 justify-content-center h-100 mt-3'>";
        foreach ($repositorio as $artigo) {
            echo <<<TEXTO
                <div class='col col-auto m-3'>
                    <dd class='mx-5 text-center'>
                        <img style='width:6rem' src="{$artigo->getImagem()}" />
                        <div class="progress rounded-5 mx-auto" style='width:6rem'>
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success rounded-5"
                                 role="progressbar" aria-label="Animated striped example"
                                 aria-valuenow="{$artigo->getPorcentagem()}"
                                 aria-valuemin="0" aria-valuemax="100"
                                 style="width: {$artigo->getPorcentagem()}%">{$artigo->getPorcentagem()}%
                             </div>
                        </div>
                    </dd>
                </div>
            TEXTO;
        }
        echo "</div>";
    }

    public function softSkill($repositorio)
    {
        echo "<div id='softSkill' class='text-center display-5 m-6'>Soft Skills</div>
        <div class='h-100 mt-3'>";
            foreach ($repositorio as $artigo) {
                echo <<<TEXTO
                    <div class="ps-4">
                        <li id="conteudo" class='container row col-auto justify-content-center text-start'>
                            <div class="col col-3">{$artigo->getNome()}</div>
                            <div class="col col-9">{$artigo->getDescricao()}</div>
                            <hr>
                        </li>
                    </div>
                TEXTO;
            }
        echo "</div>";
    }

    public function Tecnologia($repositorio)
    {
        echo "<div id='tecnologia' class='text-center display-5 m-6'>Tecnologias</div>";
        echo "<div id='' class='row col-auto mx-0 justify-content-center h-100 mt-6'>";
        foreach ($repositorio as $artigo) {
            echo <<<TEXTO
                <div class='col col-auto m-3'>
                    <dd class='mx-5'>
                        <img style='width:6rem' src="{$artigo->getImagem()}" />
                        <div class="progress rounded-5 mx-auto" style='width:8rem'>
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success rounded-5" role="progressbar" aria-label="Animated striped example" aria-valuenow="{$artigo->getPorcentagem()}" aria-valuemin="0" aria-valuemax="100" style="width: {$artigo->getPorcentagem()}%">{$artigo->getPorcentagem()}%</div>
                        </div>
                    </dd>
                </div>
            TEXTO;
        }
        echo "</div>";
    }

    public function Formacao($repositorio)
    {
        echo "<div id='formacao' class='text-center display-5 m-6'>Formações</div>
        <div class='h-100 mt-6'>";
            foreach ($repositorio as $artigo) {
                $dataFinal = $artigo->getConclusao('mes/ano') == '' ? '' : ' - ' . $artigo->getConclusao('mes/ano');
                /** @var TYPE_NAME $ */
                echo <<<TEXTO
                    <div id="conteudo" class="container justify-content-center text-start h-100">
                        <div class="row col-12">
                            <div class="co col-4 text-start">
                                <img style="width: 6rem" id="conteudo" src="{$artigo->getImagem()}">
                                <p id="conteudo">{$artigo->getInstituicao()}</p>
                            </div>
                            <p id="conteudo" class="col col-5 m-auto text-start">{$artigo->getNome()}</p>
                            <p id="conteudo" class="col col-3 m-auto text-end">
                            {$artigo->getInicio('mes/ano')}{$dataFinal}</p>
                        </div>
                        <hr>
                    </div>
                TEXTO;
            }
        echo "</div>";
    }

    public function Projeto($repositorio)
    {
        echo "<div id='projeto' class='text-center display-5 m-6'>Projetos</div>
        <div class='h-100 mt-3'>";
            foreach ($repositorio as $artigo) {
                echo <<<TEXTO
                    <article class='container'>
                        <div class='row col-12 rounded bg-dark bg-opacity-50 border border-withe'>
                            <dd class='col col-3 m-0 justify-content-center'>
                                <img src="{$artigo->getImagem()}" style="width: 6rem;">
                                <p id="conteudo">
                                    {$artigo->getNome()}
                                </p>
                            </dd>
                            <dd id="conteudo" class='col col-9 m-auto text-start m-0'>
                                {$artigo->getDescricao()}
                            </dd>
                        </div>
                    </article>
                TEXTO;
            }
        echo "</div>";
    }

    public function editar($repositorio)
    {
        echo "<div id='projeto' class='display-5 m-6'>Projetos</div>
        <div class='mt-3'>";
        foreach ($repositorio as $artigo) {
            echo <<<TEXTO
                    <article class='container'>
                        <div class='row col-auto rounded bg-dark bg-opacity-50 border border-withe text-center'>
                            <dd class='col col-3 m-0 justify-content-center'>
                    TEXTO;
            if (method_exists($artigo, 'getImagem')) {
                echo <<<TEXTO
                                <img src="{$artigo->getImagem()}" style="width: 6rem;">
                        TEXTO;
            }
                echo <<<TEXTO
                                <p id="conteudo">
                                    {$artigo->getNome()}
                                </p>
                            </dd>
                        TEXTO;
            if (method_exists($artigo, 'getDescricao')) {
                echo <<<TEXTO
                            <dd id="conteudo" class='col col-auto m-auto text-start'>
                                {$artigo->getDescricao()}
                            </dd>
                        TEXTO;
            };

            if (method_exists($artigo, 'getPorcentagem')) {
                echo <<<TEXTO
                            <dd id="conteudo" class='col col-auto m-auto text-start'>
                                {$artigo->getPorcentagem()}%
                            </dd>
                        TEXTO;
            };

            if (method_exists($artigo, 'getLink')) {
                echo <<<TEXTO
                            <dd id="conteudo" class='col col-auto m-auto text-start'>
                                {$artigo->getLink()}
                            </dd>
                        TEXTO;
            };

            if (method_exists($artigo, 'getInstituicao')) {
                echo <<<TEXTO
                            <dd id="conteudo" class='col col-auto m-auto text-start'>
                                {$artigo->getInstituicao()}
                            </dd>
                        TEXTO;
            };

            if (method_exists($artigo, 'getInicio')) {
                echo <<<TEXTO
                            <dd id="conteudo" class='col col-auto m-auto text-start'>
                                {$artigo->getInicio('mes/ano')}
                        TEXTO;
                if (method_exists($artigo, 'getConclusao')) {
                    echo ' - ' . $artigo->getConclusao('mes/ano');
                }
                echo <<<TEXTO
                            </dd>
                        TEXTO;
            };


            echo <<<TEXTO
                        </div>
                                                <dd class="text-end col-auto">
                            <a href="/editar-conteudo" class="btn btn-primary btn-sm">
                                Editar
                            </a>
                            <a href="/excluir-conteudo" class="btn btn-danger btn-sm">
                                Excluir
                            </a>
                        </dd>
                    </article>
                TEXTO;
        }
        echo "</div>";
    }

}
<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ce17a06d123786834a6ea50c315248a49c186b02a71ae7129cd552441505c24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9acd496c3fc7e370dbf6130329191ad6cc7dc0a01f49e09876320eed667324ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acd496c3fc7e370dbf6130329191ad6cc7dc0a01f49e09876320eed667324ff->enter($__internal_9acd496c3fc7e370dbf6130329191ad6cc7dc0a01f49e09876320eed667324ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_77c391e7499806e3029bbd8d3fbf80ab69003b276198804c59cd1b0aaa6fb4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c391e7499806e3029bbd8d3fbf80ab69003b276198804c59cd1b0aaa6fb4ab->enter($__internal_77c391e7499806e3029bbd8d3fbf80ab69003b276198804c59cd1b0aaa6fb4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9acd496c3fc7e370dbf6130329191ad6cc7dc0a01f49e09876320eed667324ff->leave($__internal_9acd496c3fc7e370dbf6130329191ad6cc7dc0a01f49e09876320eed667324ff_prof);

        
        $__internal_77c391e7499806e3029bbd8d3fbf80ab69003b276198804c59cd1b0aaa6fb4ab->leave($__internal_77c391e7499806e3029bbd8d3fbf80ab69003b276198804c59cd1b0aaa6fb4ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

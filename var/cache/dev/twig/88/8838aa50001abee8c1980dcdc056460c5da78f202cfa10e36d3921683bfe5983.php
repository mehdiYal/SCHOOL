<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f111532776c7ebfdfd3e5f59a521516b32c68bed34faea6dd165eb5da3984b0c extends Twig_Template
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
        $__internal_c911eb006f62e7c9f4615219e23d466e092b7311e3a45587e0987ad8f6894b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c911eb006f62e7c9f4615219e23d466e092b7311e3a45587e0987ad8f6894b6c->enter($__internal_c911eb006f62e7c9f4615219e23d466e092b7311e3a45587e0987ad8f6894b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_45940a5aa250a8133b2b5ec3042f953b508c3d48084ad225eb808bb1b53da7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45940a5aa250a8133b2b5ec3042f953b508c3d48084ad225eb808bb1b53da7ec->enter($__internal_45940a5aa250a8133b2b5ec3042f953b508c3d48084ad225eb808bb1b53da7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c911eb006f62e7c9f4615219e23d466e092b7311e3a45587e0987ad8f6894b6c->leave($__internal_c911eb006f62e7c9f4615219e23d466e092b7311e3a45587e0987ad8f6894b6c_prof);

        
        $__internal_45940a5aa250a8133b2b5ec3042f953b508c3d48084ad225eb808bb1b53da7ec->leave($__internal_45940a5aa250a8133b2b5ec3042f953b508c3d48084ad225eb808bb1b53da7ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

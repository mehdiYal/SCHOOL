<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_51f621cbba57e89857f0e53e43e5fcd0bce6cc72e99f382762e03d229f766534 extends Twig_Template
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
        $__internal_7b7e0517fa106871f61c326da4f81c2f97b81cf7ab691b6b1b7e5fc3e783c142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7e0517fa106871f61c326da4f81c2f97b81cf7ab691b6b1b7e5fc3e783c142->enter($__internal_7b7e0517fa106871f61c326da4f81c2f97b81cf7ab691b6b1b7e5fc3e783c142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_afc62eb8128482324c54a902cd085e69db9f718960867c61d793b86269d48cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc62eb8128482324c54a902cd085e69db9f718960867c61d793b86269d48cc5->enter($__internal_afc62eb8128482324c54a902cd085e69db9f718960867c61d793b86269d48cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7b7e0517fa106871f61c326da4f81c2f97b81cf7ab691b6b1b7e5fc3e783c142->leave($__internal_7b7e0517fa106871f61c326da4f81c2f97b81cf7ab691b6b1b7e5fc3e783c142_prof);

        
        $__internal_afc62eb8128482324c54a902cd085e69db9f718960867c61d793b86269d48cc5->leave($__internal_afc62eb8128482324c54a902cd085e69db9f718960867c61d793b86269d48cc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

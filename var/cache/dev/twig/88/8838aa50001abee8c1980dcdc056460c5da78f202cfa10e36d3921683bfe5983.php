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
        $__internal_7c9003ce6f6fe0f017c030fa1de4a6c980a61900b89f7935b7438bd53fb470bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9003ce6f6fe0f017c030fa1de4a6c980a61900b89f7935b7438bd53fb470bd->enter($__internal_7c9003ce6f6fe0f017c030fa1de4a6c980a61900b89f7935b7438bd53fb470bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0efee25095a56064f24bbb5592e8314cde6ada79cd25b7bc495f91a9b64be6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efee25095a56064f24bbb5592e8314cde6ada79cd25b7bc495f91a9b64be6a5->enter($__internal_0efee25095a56064f24bbb5592e8314cde6ada79cd25b7bc495f91a9b64be6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7c9003ce6f6fe0f017c030fa1de4a6c980a61900b89f7935b7438bd53fb470bd->leave($__internal_7c9003ce6f6fe0f017c030fa1de4a6c980a61900b89f7935b7438bd53fb470bd_prof);

        
        $__internal_0efee25095a56064f24bbb5592e8314cde6ada79cd25b7bc495f91a9b64be6a5->leave($__internal_0efee25095a56064f24bbb5592e8314cde6ada79cd25b7bc495f91a9b64be6a5_prof);

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

<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_236d9c93a7ac1a6937a9d1fd8e0c3533f4c295d97bfdfae970920830eb1b4d1c extends Twig_Template
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
        $__internal_07d9dd94ee0905d4f8d41737f706fd730d713096845e1f7b69668b7dda49b305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d9dd94ee0905d4f8d41737f706fd730d713096845e1f7b69668b7dda49b305->enter($__internal_07d9dd94ee0905d4f8d41737f706fd730d713096845e1f7b69668b7dda49b305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f8e33dabb2cdc874efdb8ea59c957ce02a72b5a554f809f1a2903966c67bde46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e33dabb2cdc874efdb8ea59c957ce02a72b5a554f809f1a2903966c67bde46->enter($__internal_f8e33dabb2cdc874efdb8ea59c957ce02a72b5a554f809f1a2903966c67bde46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_07d9dd94ee0905d4f8d41737f706fd730d713096845e1f7b69668b7dda49b305->leave($__internal_07d9dd94ee0905d4f8d41737f706fd730d713096845e1f7b69668b7dda49b305_prof);

        
        $__internal_f8e33dabb2cdc874efdb8ea59c957ce02a72b5a554f809f1a2903966c67bde46->leave($__internal_f8e33dabb2cdc874efdb8ea59c957ce02a72b5a554f809f1a2903966c67bde46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

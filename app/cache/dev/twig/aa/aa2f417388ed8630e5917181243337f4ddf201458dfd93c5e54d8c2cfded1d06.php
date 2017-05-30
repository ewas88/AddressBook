<?php

/* AddressBookBundle:Email:add.html.twig */
class __TwigTemplate_91f1aca814fb1bc9d87aee7c9ddab4b3e80b905fa442bf07e2ad4ee08fc46dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Email:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a22278c6f0b38918cc513c2b8ef7672cca39c1698dc6d76d363e37b7a0a9b24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22278c6f0b38918cc513c2b8ef7672cca39c1698dc6d76d363e37b7a0a9b24c->enter($__internal_a22278c6f0b38918cc513c2b8ef7672cca39c1698dc6d76d363e37b7a0a9b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Email:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a22278c6f0b38918cc513c2b8ef7672cca39c1698dc6d76d363e37b7a0a9b24c->leave($__internal_a22278c6f0b38918cc513c2b8ef7672cca39c1698dc6d76d363e37b7a0a9b24c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_281ab38d466c91046c0538e16afe1533cfae46059155568d1ebb2407a7fef9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281ab38d466c91046c0538e16afe1533cfae46059155568d1ebb2407a7fef9fe->enter($__internal_281ab38d466c91046c0538e16afe1533cfae46059155568d1ebb2407a7fef9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Add new email";
        echo " ";
        
        $__internal_281ab38d466c91046c0538e16afe1533cfae46059155568d1ebb2407a7fef9fe->leave($__internal_281ab38d466c91046c0538e16afe1533cfae46059155568d1ebb2407a7fef9fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c402be509721b9bcb496b2717cd82987f6a0f92bc837d411361f6eb07deecd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c402be509721b9bcb496b2717cd82987f6a0f92bc837d411361f6eb07deecd6->enter($__internal_6c402be509721b9bcb496b2717cd82987f6a0f92bc837d411361f6eb07deecd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3 class=\"w3-container w3-khaki\">Add or modify email for ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>Email:</b> <input type=\"email\" name=\"email_address\" required><br>
        </p>
        <p>
            <b>Type:</b>
            <select name=\"type\">
                <option value=\"private\">Private</option>
                <option value=\"work\">Corporate</option>
            </select>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

";
        
        $__internal_6c402be509721b9bcb496b2717cd82987f6a0f92bc837d411361f6eb07deecd6->leave($__internal_6c402be509721b9bcb496b2717cd82987f6a0f92bc837d411361f6eb07deecd6_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Email:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} {{ 'Add new email' }} {% endblock %}

{% block body %}
    <h3 class=\"w3-container w3-khaki\">Add or modify email for {{ person.name}} {{  person.surname}}</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>Email:</b> <input type=\"email\" name=\"email_address\" required><br>
        </p>
        <p>
            <b>Type:</b>
            <select name=\"type\">
                <option value=\"private\">Private</option>
                <option value=\"work\">Corporate</option>
            </select>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/{{ person.id }}/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

{% endblock %}", "AddressBookBundle:Email:add.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Email/add.html.twig");
    }
}

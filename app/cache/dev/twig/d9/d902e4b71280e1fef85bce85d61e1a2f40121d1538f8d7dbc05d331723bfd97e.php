<?php

/* AddressBookBundle:Phone:add.html.twig */
class __TwigTemplate_25dab8a033b58683f9fca76d9e50f6727d7fc6f06d1ba30c28db19e7338fea3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Phone:add.html.twig", 1);
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
        $__internal_b39eb461024d57891e83c3ac4d8fc6fd65b840b82b57bc16290516b657b20fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39eb461024d57891e83c3ac4d8fc6fd65b840b82b57bc16290516b657b20fc5->enter($__internal_b39eb461024d57891e83c3ac4d8fc6fd65b840b82b57bc16290516b657b20fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Phone:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b39eb461024d57891e83c3ac4d8fc6fd65b840b82b57bc16290516b657b20fc5->leave($__internal_b39eb461024d57891e83c3ac4d8fc6fd65b840b82b57bc16290516b657b20fc5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45fe427ee5905c50bb30d3c3213f49d8e1cce7b519a9dc64e642acd61fa585c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fe427ee5905c50bb30d3c3213f49d8e1cce7b519a9dc64e642acd61fa585c9->enter($__internal_45fe427ee5905c50bb30d3c3213f49d8e1cce7b519a9dc64e642acd61fa585c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Add new phone";
        echo " ";
        
        $__internal_45fe427ee5905c50bb30d3c3213f49d8e1cce7b519a9dc64e642acd61fa585c9->leave($__internal_45fe427ee5905c50bb30d3c3213f49d8e1cce7b519a9dc64e642acd61fa585c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f30218230982b619114d3d2501381dc01b319a794a178882b119ef4b04f9849f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30218230982b619114d3d2501381dc01b319a794a178882b119ef4b04f9849f->enter($__internal_f30218230982b619114d3d2501381dc01b319a794a178882b119ef4b04f9849f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3 class=\"w3-container w3-khaki\">Add or modify phone for ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>Number:</b> <input type=\"number\" name=\"phone_number\" required><br>
        </p>
        <p>
            <b>Type:</b>
            <select name=\"type\">
                <option value=\"cell\">Cell Phone</option>
                <option value=\"home\">Home Phone</option>
                <option value=\"work\">Work Phone</option>
            </select>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

";
        
        $__internal_f30218230982b619114d3d2501381dc01b319a794a178882b119ef4b04f9849f->leave($__internal_f30218230982b619114d3d2501381dc01b319a794a178882b119ef4b04f9849f_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Phone:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %} {{ 'Add new phone' }} {% endblock %}

{% block body %}
    <h3 class=\"w3-container w3-khaki\">Add or modify phone for {{ person.name}} {{  person.surname}}</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>Number:</b> <input type=\"number\" name=\"phone_number\" required><br>
        </p>
        <p>
            <b>Type:</b>
            <select name=\"type\">
                <option value=\"cell\">Cell Phone</option>
                <option value=\"home\">Home Phone</option>
                <option value=\"work\">Work Phone</option>
            </select>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/{{ person.id }}/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

{% endblock %}", "AddressBookBundle:Phone:add.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Phone/add.html.twig");
    }
}
